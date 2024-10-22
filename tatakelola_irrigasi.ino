#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <ThingSpeak.h>
WiFiClient client;

#define pin_relay1 D6
#define pin_relay2 D7
#define pin_relay3 D8
#include "DHT.h"
#define DHTPIN D1
#define DHTTYPE DHT22   // DHT 22
DHT dht(DHTPIN, DHTTYPE);

String apiKey = "F4XORKOMK5VPOY80"; // Api thingspeak
const int sensor_pin = A0;	/* Soil moisture sensor O/P pin */
const char* server = "api.thingspeak.com";
const char *ssid = "POCOPHONE F1";  //Setting nama wifi
const char *password = "donasimas"; //Setting password wifi

//alamat web/server
const char *host = "192.168.43.128";   
//=======================================================================
//                    Power on setup
//=======================================================================

void setup() {
  dht.begin();
  delay(1000);
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  Serial.begin(9600);
  WiFi.begin(ssid, password);     //Koneksikan wifi pada jaringan
  Serial.println("");

  Serial.print("Connecting");
  // Menunggu koneksi WIFI
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  //mode pin pada relay
  pinMode(pin_relay1, OUTPUT);
  pinMode(pin_relay2, OUTPUT);
  pinMode(pin_relay3, OUTPUT);

  //status awal relay
  digitalWrite(pin_relay1, 0);
  digitalWrite(pin_relay2, 0);
  digitalWrite(pin_relay3, 0);
  
  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
}

//=======================================================================
//                    Main Program Loop
//=======================================================================
void loop() {
  HTTPClient http;    //Declare object of class HTTPClient
  String postData, suhu, kelembapan, kelembapan_tanah, link;
  
  float humidity = dht.readHumidity();
  float temperature = dht.readTemperature();
  float moisture_percentage;
  int sensor_analog;
  sensor_analog = analogRead(sensor_pin);
  moisture_percentage = ( 82.41 - ( (sensor_analog/1023.00) * 100 ) );//kalibrasi sensor untuk kelembapan tanah
  Serial.print("Humidity: ");
  Serial.print(humidity);
  Serial.print(" %, Temp: ");
  Serial.print(temperature);
  Serial.print(" Kelembapan:");
  Serial.print(moisture_percentage);
  Serial.println(" Lembap");
  delay(1000);
  suhu = String(temperature);   //String to integer conversion
  kelembapan = String(humidity);   //String to integer conversion
  kelembapan_tanah = String(moisture_percentage);   //String to integer conversion
  
  //Post Data
  postData = "&status1=" + suhu + "&status2=" + kelembapan + "&status3=" + kelembapan_tanah;
  link = "http://192.168.43.128/tatakelolairigasi/postdemo.php";
  
  http.begin(client, link);              //Specify request destination
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");    //Specify content-type header

  int httpCode = http.POST(postData);   //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload

  http.end();  //Close connection

  // Membaca status relay dari server
  String LinkRelay1 = "http://192.168.43.128/tatakelolairigasi/layout/bacarelay1.php";
  HTTPClient httpRelay1;
  httpRelay1.begin(client, LinkRelay1);
  httpRelay1.GET();
  String responseRelay1 = httpRelay1.getString();
  Serial.println("Relay 1 Status: " + responseRelay1);
  httpRelay1.end();
  digitalWrite(pin_relay1, responseRelay1.toInt());

  String LinkRelay2 = "http://192.168.43.128/tatakelolairigasi/layout/bacarelay2.php";
  HTTPClient httpRelay2;
  httpRelay2.begin(client, LinkRelay2);
  httpRelay2.GET();
  String responseRelay2 = httpRelay2.getString();
  Serial.println("Relay 2 Status: " + responseRelay2);
  httpRelay2.end();
  digitalWrite(pin_relay2, responseRelay2.toInt());

  String LinkRelay3 = "http://192.168.43.128/tatakelolairigasi/layout/bacarelay2.php";
  HTTPClient httpRelay3;
  httpRelay3.begin(client, LinkRelay3);
  httpRelay3.GET();
  String responseRelay3 = httpRelay3.getString();
  Serial.println("Relay 3 Status: " + responseRelay3);
  httpRelay3.end();
  digitalWrite(pin_relay3, responseRelay3.toInt());

  String LinkRelayOtomatis = "http://192.168.43.128/tatakelolairigasi/layout/bacarelayotomatis.php";
  HTTPClient httpRelayOtomatis;
  httpRelayOtomatis.begin(client, LinkRelayOtomatis);
  httpRelayOtomatis.GET();
  String responseRelayOtomatis = httpRelayOtomatis.getString();
  Serial.println("Relay Otomatis Status: " + responseRelayOtomatis);
  httpRelayOtomatis.end();

  // Logika kendali otomatis waterpump dan solenoid valve
  if (responseRelayOtomatis.toInt() == 1) {
    if (moisture_percentage < 20) {
      digitalWrite(pin_relay1, 1); // Membuka solenoid
      Serial.println("Solenoid Terbuka (Relay 1 ON)");
    } else if (moisture_percentage > 30) {
      digitalWrite(pin_relay1, 0); // Menutup solenoid
      Serial.println("Solenoid Tertutup (Relay 1 OFF)");
    }

    if (digitalRead(pin_relay1) == 1) {
      digitalWrite(pin_relay2, 0); // Menutup solenoid relay2
      Serial.println("Relay 2 OFF (Solenoid 2 Tertutup)");
    }

    if (digitalRead(pin_relay2) == 1) {
      digitalWrite(pin_relay1, 0); // Menutup solenoid relay1
      digitalWrite(pin_relay3, HIGH); // Aktifkan relay untuk menyalakan pompa air
      Serial.println("Pompa Menyala (Relay 3 ON)");
    } else {
      digitalWrite(pin_relay3, LOW); // Pompa tidak menyala jika relay2 tidak menyala
      Serial.println("Pompa Mati (Relay 3 OFF)");
    }
  }

  // Mengirim data ke ThingSpeak
  if (client.connect(server, 80)) {
    String postStr = apiKey;
    postStr += "&field1=";
    postStr += String(temperature);
    postStr += "&field2=";
    postStr += String(humidity);
    postStr += "&field3=";
    postStr += String(moisture_percentage);
    postStr += "\r\n";

    // Mengirim permintaan POST ke ThingSpeak
    client.print("POST /update HTTP/1.1\n");
    client.print("Host: api.thingspeak.com\n");
    client.print("Connection: close\n");
    client.print("X-THINGSPEAKAPIKEY: " + apiKey + "\n");
    client.print("Content-Type: application/x-www-form-urlencoded\n");
    client.print("Content-Length: " + String(postStr.length()) + "\n\n");
    client.print(postStr);
    
    // Beri jeda untuk memastikan data terkirim
    delay(1000);
    
    Serial.println("Data berhasil dikirim ke ThingSpeak.");
  } else {
    Serial.println("Gagal terhubung ke ThingSpeak.");
  }

  // Tutup koneksi
  client.stop();

  delay(10000);  //Post Data at every 10 seconds
}
//=======================================================================
