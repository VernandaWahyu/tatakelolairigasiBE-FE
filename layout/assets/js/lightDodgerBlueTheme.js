!function(e){var r={};function a(t){if(r[t])return r[t].exports;var l=r[t]={i:t,l:!1,exports:{}};return e[t].call(l.exports,l,l.exports,a),l.l=!0,l.exports}a.m=e,a.c=r,a.d=function(e,r,t){a.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,r){if(1&r&&(e=a(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(a.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var l in e)a.d(t,l,function(r){return e[r]}.bind(null,l));return t},a.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(r,"a",r),r},a.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},a.p="/",a(a.s=525)}({181:function(e,r,a){"use strict";a.r(r),r.default={"mainNavbar.navbar":function(){return"sticky"===this.settings["layout.layout"]?"dark-dodger-blue":"light-dodger-blue"},"mainDrawer.theme":function(){return"light-dodger-blue"},".layout-boxed .sidebar-brand":{removeClass:["sidebar-brand-dark","bg-primary-pickled-bluewood","bg-dark-blue","bg-dark-purple","bg-dark","bg-black"]},".js-update-chart-line":{setAttribute:[{name:"data-chart-line-border-color",value:"dodger-blue"},{name:"data-chart-line-border-opacity",value:"1"}]},".js-update-chart-area":{setAttribute:[{name:"data-chart-line-background-color",value:"gradient:dodger-blue"},{name:"data-chart-line-background-opacity",value:"0.1"}]},".js-update-chart-bar":{setAttribute:[{name:"data-chart-line-background-color",value:"gradient:dodger-blue"},{name:"data-chart-line-background-opacity",value:"1"}]},"#locationDoughnutChart":{setAttribute:[{name:"data-chart-line-background-color",value:"dodger-blue;dodger-blue;gray"},{name:"data-chart-line-background-opacity",value:"0.2;1;0.24"}]},"#attendanceDoughnutChart":{setAttribute:[{name:"data-chart-line-background-color",value:"dodger-blue;dodger-blue;gray.700;gray"},{name:"data-chart-line-background-opacity",value:"1;0.2;1;1"}]},"#visitsByDeviceChart":{setAttribute:[{name:"data-chart-line-background-color",value:"dodger-blue;gray.300"},{name:"data-chart-line-background-opacity",value:"0.2,1"}]},".js-update-chart-progress":{setAttribute:[{name:"data-chart-line-background-color",value:"dodger-blue;gray"},{name:"data-chart-line-background-opacity",value:"1"}]},".js-update-chart-progress-accent":{setAttribute:[{name:"data-chart-line-background-color",value:"dodger-blue;gray"},{name:"data-chart-line-background-opacity",value:"1"}]},".js-update-chart-line-accent":{setAttribute:[{name:"data-chart-line-border-color",value:"dodger-blue"},{name:"data-chart-line-border-opacity",value:"0.2"}]},".js-update-chart-line-2nd-accent":{setAttribute:[{name:"data-chart-line-border-color",value:"dodger-blue,dodger-blue"},{name:"data-chart-line-border-opacity",value:"1,0.2"}]},".bg-dark":{addClass:["bg-primary-pickled-bluewood"],removeClass:["bg-dark"]},".bg-dark-blue":{addClass:["bg-primary-pickled-bluewood"],removeClass:["bg-dark-blue"]},".bg-dark-purple":{addClass:["bg-primary-pickled-bluewood"],removeClass:["bg-dark-purple"]},".bg-accent-yellow":{addClass:["bg-accent-dodger-blue"],removeClass:["bg-accent-yellow"]},".bg-accent-red":{addClass:["bg-accent-dodger-blue"],removeClass:["bg-accent-red"]},".bg-accent":{addClass:["bg-accent-pickled-bluewood"],removeClass:["bg-accent"]},".bg-primary-purple":{addClass:["bg-primary-dodger-blue"],removeClass:["bg-primary-purple"]},".bg-primary-yellow":{addClass:["bg-primary-dodger-blue"],removeClass:["bg-primary-yellow"]},".bg-primary-red":{addClass:["bg-primary-dodger-blue"],removeClass:["bg-primary-red"]},".bg-primary":{addClass:["bg-primary-dodger-blue"],removeClass:["bg-primary"]},".border-left-primary-purple":{addClass:["border-left-primary-dodger-blue"],removeClass:["border-left-primary-purple"]},".border-left-primary-yellow":{addClass:["border-left-primary-dodger-blue"],removeClass:["border-left-primary-yellow"]},".border-left-primary-red":{addClass:["border-left-primary-dodger-blue"],removeClass:["border-left-primary-red"]},".border-left-primary":{addClass:["border-left-primary-dodger-blue"],removeClass:["border-left-primary"]},".border-left-accent-yellow":{addClass:["border-left-accent-pickled-bluewood"],removeClass:["border-left-accent-yellow"]},".border-left-accent-red":{addClass:["border-left-accent-pickled-bluewood"],removeClass:["border-left-accent-red"]},".border-left-accent":{addClass:["border-left-accent-pickled-bluewood"],removeClass:["border-left-accent"]},".alert-primary-purple":{addClass:["alert-primary-dodger-blue"],removeClass:["alert-primary-purple"]},".alert-primary-yellow":{addClass:["alert-primary-dodger-blue"],removeClass:["alert-primary-yellow"]},".alert-primary-red":{addClass:["alert-primary-dodger-blue"],removeClass:["alert-primary-red"]},".alert-primary":{addClass:["alert-primary-dodger-blue"],removeClass:["alert-primary"]},".alert-accent":{addClass:["alert-accent-dodger-blue"],removeClass:["alert-accent"]},".alert-accent-yellow":{addClass:["alert-accent-dodger-blue"],removeClass:["alert-accent-yellow"]},".alert-accent-red":{addClass:["alert-accent-dodger-blue"],removeClass:["alert-accent-red"]},".alert-soft-primary-purple":{addClass:["alert-soft-primary-dodger-blue"],removeClass:["alert-soft-primary-purple"]},".alert-soft-primary-yellow":{addClass:["alert-soft-primary-dodger-blue"],removeClass:["alert-soft-primary-yellow"]},".alert-soft-primary-red":{addClass:["alert-soft-primary-dodger-blue"],removeClass:["alert-soft-primary-red"]},".alert-soft-primary":{addClass:["alert-soft-primary-dodger-blue"],removeClass:["alert-soft-primary"]},".alert-soft-accent-yellow":{addClass:["alert-soft-accent-dodger-blue"],removeClass:["alert-soft-accent-yellow"]},".alert-soft-accent-red":{addClass:["alert-soft-accent-dodger-blue"],removeClass:["alert-soft-accent-red"]},".alert-soft-accent":{addClass:["alert-soft-accent-dodger-blue"],removeClass:["alert-soft-accent"]},".text-accent-yellow":{addClass:["text-accent-pickled-bluewood"],removeClass:["text-accent-yellow"]},".text-accent-red":{addClass:["text-accent-pickled-bluewood"],removeClass:["text-accent-red"]},".text-accent":{addClass:["text-accent-pickled-bluewood"],removeClass:["text-accent"]},".text-primary-purple":{addClass:["text-primary"],removeClass:["text-primary-purple"]},".text-primary-yellow":{addClass:["text-primary"],removeClass:["text-primary-yellow"]},".text-primary-red":{addClass:["text-primary"],removeClass:["text-primary-red"]},".text-primary":{addClass:["text-primary-dodger-blue"],removeClass:["text-primary"]},".btn-accent-yellow":{addClass:["btn-accent-dodger-blue"],removeClass:["btn-accent-yellow"]},".btn-accent-red":{addClass:["btn-accent-dodger-blue"],removeClass:["btn-accent-red"]},".btn-accent":{addClass:["btn-accent-dodger-blue"],removeClass:["btn-accent"]},".btn-primary-purple":{addClass:["btn-primary-dodger-blue"],removeClass:["btn-primary-purple"]},".btn-primary-yellow":{addClass:["btn-primary-dodger-blue"],removeClass:["btn-primary-yellow"]},".btn-primary-red":{addClass:["btn-primary-dodger-blue"],removeClass:["btn-primary-red"]},".btn-primary":{addClass:["btn-primary-dodger-blue"],removeClass:["btn-primary"]},".badge-accent-yellow":{addClass:["badge-accent-dodger-blue"],removeClass:["badge-accent-yellow"]},".badge-accent-red":{addClass:["badge-accent-dodger-blue"],removeClass:["badge-accent-red"]},".badge-accent":{addClass:["badge-accent-dodger-blue"],removeClass:["badge-accent"]}}},525:function(e,r,a){e.exports=a(181)}});