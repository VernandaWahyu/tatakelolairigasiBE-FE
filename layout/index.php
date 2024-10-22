<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>
        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css"
              href="assets/css/dark-mode.css"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="assets/vendor/jqvmap/jqvmap.min.css"
              rel="stylesheet">

    </head>

    <body class="layout-app layout-sticky-subnav ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
                        <img class="navbar-brand-icon mr-0 mr-lg-8pt"
                             src="assets/images/logo/accent-teal-100@2x.png"
                             width="32"
                             alt="Huma">
                        <span class="d-none d-lg-block">Smart Drip Irrigation</span>
                    </a>
                  
                    <div class="flex"></div>

                    
                    <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                        <div class="nav-item  d-none d-sm-flex">
                            <a href="#"
                               class="nav-link d-flex align-items-center"
                               >
                                <img width="32"
                                     height="32"
                                     class="rounded-circle mr-8pt"
                                     src="assets/images/people/50/guy-3.jpg"
                                     alt="account" />
                                <span class="flex d-flex flex-column mr-8pt">
                                    <span class="navbar-text-100">Wahyu Saputra</span>
                                    <small class="navbar-text-50">Administrator</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- // END Header -->
                <?php
	error_reporting(E_ALL);
    ini_set('display_errors', 1);
	require_once('koneksi.php');
	$query1="SELECT * FROM logs ORDER BY id_logs DESC LIMIT 1 ";		
	$result=mysqli_query($conn,$query1);
    $data= mysqli_fetch_array($result);
    $relay1=$data['relay1'];
    $relay2=$data['relay2'];
    $relayotomatis=$data['relayotomatis'];
	// while($data=mysqli_fetch_array($result))
    ?>
                <div class="border-bottom-2 py-32pt position-relative z-1">
                    <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Dashboard</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Dashboard

                                    </li>

                                </ol>

                            </div>

                            <div></div>

                        </div>

                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="page-section">

                        <div>
                            <div class="h2 mb-0 mr-3"><?php echo $data['hari'] ?>,<?php echo $data['tanggal'] ?>,<?php echo $data['waktu'] ?>  </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Data </div>
                        </div>
                

                        <div class="row card-group-row mb-lg-8pt">
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                    <p class="mb-0 page-separator__text"><strong>Suhu </strong></p>
                                    <p class="mb-0 page-separator__text"><strong>Udara</strong></p>
                                        <div class="d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3"><?php echo $data['suhu'] ?>°C</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                    <p class="mb-0 page-separator__text"><strong>Kelembapan</strong></p>
                                    <p class="mb-0 page-separator__text"><strong>Udara</strong></p>
                                        <div class="d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3"><?php echo $data['kelembapan'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-body d-flex flex-column align-items-center">
                                    <p class="mb-0 page-separator__text"><strong>Kelembapan</strong></p>
                                    <p class="mb-0 page-separator__text"><strong>Tanah</strong></p>
                                        <div class="d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3"><?php echo $data['kelembapan_tanah'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                <div class="card-body d-flex flex-column align-items-center">
                                <p class="mb-0 page-separator__text"><strong>Status</strong></p>
                                <p class="mb-0 page-separator__text"><strong>Tanah</strong></p>
                                <div class="d-flex align-items-center">
                                <div id="soilStatus" class="h2 mb-0 mr-3">
                            <?php 
            $kelembapan_tanah = $data['kelembapan_tanah'];
        if ($kelembapan_tanah < 10) {
            echo "SensorOFF";
        } elseif ($kelembapan_tanah >= 10 && $kelembapan_tanah <= 19) {
            echo "Kering";
        } elseif ($kelembapan_tanah >= 20 && $kelembapan_tanah <= 31) {
            echo "Lembab";
        } else {
            echo "Basah";
        }
            ?>
        </div>
    </div>
    <p class="mb-0 page-separator__text">
        <?php
        if ($kelembapan_tanah < 10) {
            echo "Status: SensorOFF";
        } elseif ($kelembapan_tanah >= 10 && $kelembapan_tanah <= 19) {
            echo "Status: Kering";
        } elseif ($kelembapan_tanah >= 20 && $kelembapan_tanah <= 31) {
            echo "Status: Lembab";
        } else {
            echo "Status: Basah";
        }
        ?>
    </p>
</div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-lg-8pt">
                            <div class="col-lg-4">
                            <div class="card text-black mb-3" >
                                    <div class="card-body d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3">Otomatis</div>
                                        <div class="flex">
                                        <div class="form-check form-switch" style="font-size:30px">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckOtomatis"  onchange="updateSwitch(this.checked)"
                                            <?php if($relayotomatis==1) echo "checked"?> >
                                        <label class="form-check-label" for="flexSwitchCheckOtomatis" id="switch"><span id="switch">
                                        <?php if($relayotomatis==1) echo "1" ;else echo "0";?> </span></label>
                                    </span></label>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-4">
                            <div class="card text-black mb-3" >
                                    <div class="card-body d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3">Relay 1</div>
                                        <div class="flex">
                                        <div class="form-check form-switch" style="font-size:30px">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckRelay1" onchange="updateSwitch1(this.checked)"
                                            <?php if($relay1==1) echo "checked"?> >
                                        <label class="form-check-label" for="flexSwitchCheckRelay1" id="switchLabelRelay1"><span id="switchStatus1" style="padding-left: 3rem;">
                                    <?php if($relay1==1) echo "ON" ;else echo "OFF";?> </span></label>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="card text-black mb-3">
                                    <div class="card-body d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3">Relay 2</div>
                                        <div class="flex">
                                            <div class="form-check form-switch" style="font-size:30px">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckRelay2" onchange="updateSwitch2(this.checked)"
                                            <?php if($relay2==1) echo "checked"?> >
                                        <label class="form-check-label" for="flexSwitchCheckRelay2" id="switchLabelRelay2"><span id="switchStatus2" style="padding-left: 3rem;"> 
                                    <?php if($relay2==1)  echo "ON" ;else echo "OFF";?> </span></label>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                            <div class="mb-lg-8pt">
                            <div class="h2 mb-0 mr-3 center" style="text-align: center;">Grafik Data </div>
                                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/2552933/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/2552933/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="js-fix-footer footer border-top-2">
                    
                        <!-- <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="assets/images/logo/black-70@2x.png"
                                 width="30"
                                 alt="Huma"> Smart Drip Irrigation
                        </p> -->

                    <div class="pb-16pt pb-lg-24pt">
                        <div class="container-fluid page__container">
                            <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                        <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                        <nav class="nav nav-links nav--flush">
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Facebook"></a>
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Twitter"></a>
                                            <a href="#"
                                               class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png"
                                                     width="24"
                                                     height="24"
                                                     alt="Vimeo"></a>
                                            <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                                        </nav>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                            <a href=""
                                               class="text-white-70 text-underline mr-19pt"></a>
                                            <a href=""
                                               class="text-white-70 text-underline"></a>
                                        </p>
                                        <p class="text-white-50 small mb-0"></p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                            <a href=""
                                               class="text-white-70 text-underline mr-16pt">Terms</a>
                                            <a href=""
                                               class="text-white-70 text-underline">Privacy policy</a>
                                        </p>
                                        <p class="text-white-50 small mb-0">Copyright 2024 &copy; All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END drawer-layout__content -->

            <!-- drawer -->
            <div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark sidebar-left"
                         data-perfect-scrollbar>

                        <!-- Navbar toggler -->
                        <a href="compact-index.html"
                           class="navbar-toggler navbar-toggler-right navbar-toggler-custom d-flex align-items-center justify-content-center position-absolute right-0 top-0"
                           data-toggle="tooltip"
                           data-title="Switch to Compact Vertical Layout"
                           data-placement="right"
                           data-boundary="window">
                            <span class="material-icons">sync_alt</span>
                        </a>

                        <a href="index.html"
                           class="sidebar-brand ">
                            <img class="sidebar-brand-icon"
                                 src="assets/images/logo/accent-teal-100@2x.png"
                                 alt="Huma">
                            <span>Smart Drip</span>
                            <span>Irrigation</span>
                        </a>

                        <!-- Backup dropdown toggle -->
                        <!-- <div class="sidebar-account mx-16pt mb-16pt dropdown">
                            <a href="#"
                            class="nav-link d-flex align-items-center dropdown-toggle"
                            data-toggle="dropdown" -->
                        <div class="sidebar-account mx-16pt mb-16pt ">
                            <a href="#"
                               class="nav-link d-flex align-items-center "
                               data-caret="false">
                                <img width="32"
                                     height="32"
                                     class="rounded-circle mr-8pt"
                                     src="assets/images/people/50/guy-3.jpg"
                                     alt="account" />
                                <span class="flex d-flex flex-column mr-8pt">
                                    <span class="text-black-100">Wahyu Saputra</span>
                                    <small class="text-black-50">Administrator</small>
                                </span>
                                <!-- <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="edit-account.html">Edit Account</a>
                                <a class="dropdown-item"
                                   href="billing.html">Billing</a>
                                <a class="dropdown-item"
                                   href="billing-history.html">Payments</a>
                                <a class="dropdown-item"
                                   href="login.html">Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header"><strong>Select company</strong></div>
                                <a href=""
                                   class="dropdown-item active d-flex align-items-center">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-primary">FM</span>

                                    </div>

                                    <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">FrontendMatter Inc.</strong>
                                            <span class="text-black-50">Administrator</span>
                                        </span>
                                    </small>
                                </a>
                                <a href=""
                                   class="dropdown-item d-flex align-items-center">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-accent">HH</span>

                                    </div>

                                    <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">HumaHuma Inc.</strong>
                                            <span class="text-black-50">Publisher</span>
                                        </span>
                                    </small>
                                </a>
                            </div>
                        </div>

                        <!-- <form action="index.html"
                              class="search-form flex-shrink-0 search-form--black sidebar-m-b sidebar-p-l mx-16pt pr-0">
                            <input type="text"
                                   class="form-control pl-0"
                                   placeholder="Search">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                        </form> -->

                        <div class="sidebar-heading">Menu</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   href="index.php">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="data_sensor.php">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                    <span class="sidebar-menu-text">Data Sensor</span>
                                </a>
                            </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- // END drawer -->
        </div>
        <!-- // END drawer-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="app"
                          :layout-location="{
      'compact': 'compact-index.html',
      'mini': 'mini-index.html',
      'app': 'index.html',
      'boxed': 'boxed-index.html',
      'sticky': 'sticky-index.html',
      'default': 'fixed-index.html'
    }"
                          sidebar-type="light"
                          sidebar-variant="bg-body"></app-settings>
        </div>

<!-- Tambahkan JavaScript -->
<script>

function updateSwitch(value) {

// Ubah teks label berdasarkan status checkbox
   if (value==true)
   value = "ON";
   else 
   value = "OFF";

 // Dapatkan label
   document.getElementById('switch').innerHTML = value;

 // Ajax merubah nilai pada relayotomatis
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function ()
   {
   if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
   {
       document.getElementById('switch').innerHTML = xmlhttp.responseText;
   }
   }
 //Merubah nilai pada database
   xmlhttp.open("GET", "relayotomatis.php?stat=" + value, true);
 //Share data
   xmlhttp.send();
}
function updateSwitch1(value) {

 // Ubah teks label berdasarkan status checkbox
    if (value==true)
    value = "ON";
    else 
    value = "OFF";

  // Dapatkan label
    document.getElementById('switchStatus1').innerHTML = value;

  // Ajax merubah nilai pada relay1
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function ()
    {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        document.getElementById('switchStatus1').innerHTML = xmlhttp.responseText;
    }
    }
  //Merubah nilai pada database
    xmlhttp.open("GET", "relay1.php?stat=" + value, true);
  //Share data
    xmlhttp.send();
}

function updateSwitch2(value) {

// Ubah teks label berdasarkan status checkbox
if (value==true)
    value = "ON";
else 
    value = "OFF";

 // Dapatkan label
    document.getElementById('switchStatus2').innerHTML = value;

 // Ajax merubah nilai pada relay2
    var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function ()
{
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        document.getElementById('switchStatus2').innerHTML = xmlhttp.responseText;
    }
}
//Merubah nilai pada database
xmlhttp.open("GET", "relay2.php?stat=" + value, true);
//Share data
xmlhttp.send();
}

document.addEventListener('DOMContentLoaded', (event) => {
    const otomatisSwitch = document.getElementById('flexSwitchCheckOtomatis');
    const relay1Switch = document.getElementById('flexSwitchCheckRelay1');
    const relay2Switch = document.getElementById('flexSwitchCheckRelay2');

    function updateRelaySwitches() {
        if (otomatisSwitch.checked) {
            relay1Switch.disabled = true;
            relay2Switch.disabled = true;
        } else {
            relay1Switch.disabled = false;
            relay2Switch.disabled = false;
        }
    }

    // Initialize the state on page load
    updateRelaySwitches();

    // Add event listener for the "Otomatis" switch
    otomatisSwitch.addEventListener('change', updateRelaySwitches);
});

    function updateSoilStatus(value) {
            let status = "";
            if (value >= 10.00 && value <= 15.00) {
                status = "Kering";
            } else if (value >= 16.00 && value <= 30.00) {
                status = "Lembab";
            } else if (value >= 31.00) {
                status = "Basah";
            } else {
                status = "Tidak Valid";
            }
            document.getElementById("soilStatus").textContent = status;
        }

        // Call the function to update the status on page load
        updateSoilStatus(kelembapan_tanah);

</script>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>
        

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Flatpickr -->
        <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="assets/js/flatpickr.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>
        <script src="assets/js/chartjs.js"></script>

        <!-- Chart.js Samples -->
        <script src="assets/js/page.analytics-dashboard.js"></script>

        <!-- Vector Maps -->
        <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/vector-maps.js"></script>

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

        <!-- Tables -->
        <script src="assets/js/toggle-check-all.js"></script>
        <script src="assets/js/check-selected-row.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>
    </body>

</html>