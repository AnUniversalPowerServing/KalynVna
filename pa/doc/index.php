<!DOCTYPE html>
<html>
<head>
  <title>Panchangam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.mtop5p { margin-top: 5px; }
.mtop10p { margin-top: 10px; }
.mtop15p { margin-top: 15px; }
.mbot15p { margin-bottom: 15px; }
.mtop35p { margin-top: 35px; }
.mbot35p { margin-bottom:35px; }
.mtop45p { margin-top:45px; }
.mtop65p { margin-top:85px; }
 hr { margin-bottom: 10px; }
.hr-red { border-color: red; }
.pad0 { padding: 0px; }
.hide-block { display: none; }
.font-red { color: red; }
.font-grey { color:#555; }
.font-mdm-grey { color:#666; }
.font-lgt-grey { color:#ccc; }
.bg-grey { background-color:#f5f5f5; }
code { font-weight: bold;font-size: 11px; }
table>thead>tr { background-color:#eee; }
</style>
</head>
<body>
<script>
function load_chartStyle_northIndia(id){
var chart = document.getElementById(id);
var drawChart = chart.getContext("2d");
drawChart.beginPath();

drawChart.rect(5,5,315,315);
drawChart.stroke();

drawChart.moveTo(5,5);
drawChart.lineTo(320,320);
drawChart.stroke();

drawChart.moveTo(5,320);
drawChart.lineTo(320,5);
drawChart.stroke();

drawChart.moveTo(5,155);
drawChart.lineTo(155,5);
drawChart.stroke();

drawChart.moveTo(155,5);
drawChart.lineTo(320,155);
drawChart.stroke();

drawChart.moveTo(320,155);
drawChart.lineTo(155,320);
drawChart.stroke();

drawChart.moveTo(155,320);
drawChart.lineTo(5,155);
drawChart.stroke();

drawChart.font="11px Arial";
drawChart.fillText("1",150,40);

drawChart.font="11px Arial";
drawChart.fillText("2",80,20);

drawChart.font="11px Arial";
drawChart.fillText("3",15,50);

drawChart.font="11px Arial";
drawChart.fillText("4",78,100);

drawChart.font="11px Arial";
drawChart.fillText("5",10,180);

drawChart.font="11px Arial";
drawChart.fillText("6",80,260);

drawChart.font="11px Arial";
drawChart.fillText("7",160,185);

drawChart.font="11px Arial";
drawChart.fillText("8",235,255);

drawChart.font="11px Arial";
drawChart.fillText("9",305,190);

drawChart.font="11px Arial";
drawChart.fillText("10",235,110);

drawChart.font="11px Arial";
drawChart.fillText("11",300,50);

drawChart.font="11px Arial";
drawChart.fillText("12",235,20);
}
function load_chartStyle_southIndia(id){
var chart = document.getElementById(id);

var drawChart = chart.getContext("2d");
drawChart.beginPath();
drawChart.rect(5,5,315,315);
drawChart.fillStyle   = "pink";
drawChart.fill();
drawChart.stroke();

/* Box-12 ::: Start */

/*Right side Line */
drawChart.moveTo(77.5,5);
drawChart.lineTo(77.5,77.5);
drawChart.stroke();

/* Bottom Line */
drawChart.moveTo(5,77.5);
drawChart.lineTo(77.5,77.5);
drawChart.stroke();
/* Fonts */

/* Box-12 ::: End */

/* Box-1 ::: Start */

/* Right side Line */
drawChart.moveTo(155,77.5);
drawChart.lineTo(155,5);
drawChart.stroke();

/* Bottom Line */
drawChart.moveTo(77.5,77.5);
drawChart.lineTo(155,77.5);
drawChart.stroke();

/* Fonts */


/* Box-1 ::: End */

/* Box-2 ::: Start */

/* Bottom Line */
drawChart.moveTo(155,77.5);
drawChart.lineTo(234,77.5);
drawChart.stroke();

/* Right side Line */
drawChart.moveTo(234,77.5);
drawChart.lineTo(234.5,5);
drawChart.stroke();

/* Font */


/* Box-2 ::: End */

/* Box-3 ::: Start */

/* Bottom Line */
drawChart.moveTo(234,77.5);
drawChart.lineTo(320,77.5);
drawChart.stroke();

/* Font */


/* Box-3 ::: End */

/* Box-4 ::: Start */

/* Left Side */
drawChart.moveTo(234,77.5);
drawChart.lineTo(234,155);
drawChart.stroke();

/* Bottom Line */
drawChart.moveTo(234,155);
drawChart.lineTo(320,155);
drawChart.stroke();

/* Font */

/* Box-4 ::: End */

/* Box-5 ::: Start */
/* Left side */
drawChart.moveTo(234,155);
drawChart.lineTo(234,232.5);
drawChart.stroke();
/* Bottom Line */
drawChart.moveTo(234,232.5);
drawChart.lineTo(320,232.5);
drawChart.stroke();
/* Font */

/* Box-5 ::: End */

/* Box-6 */
/* Left side */
drawChart.moveTo(234,232.5);
drawChart.lineTo(234,320);
drawChart.stroke();

/* Box-7 */
/* Top Line */
drawChart.moveTo(234,232.5);
drawChart.lineTo(155,232.5);
drawChart.stroke();
/* Font */


/* Box-8 */
/* Right side */
drawChart.moveTo(155,232.5);
drawChart.lineTo(155,320);
drawChart.stroke();
/* Top side */
drawChart.moveTo(155,232.5);
drawChart.lineTo(77.5,232.5);
drawChart.stroke();
/* Font */


/* Box-9 */
/* Right side */
drawChart.moveTo(77.5,232.5);
drawChart.lineTo(77.5,320);
drawChart.stroke();
/* Top Line */
drawChart.moveTo(77.5,232.5);
drawChart.lineTo(5,232.5);
drawChart.stroke();
/* Font */


/* Box-10 */
/* Right side */
drawChart.moveTo(77.5,232.5);
drawChart.lineTo(77.5,155);
drawChart.stroke();
/* Top Line */
drawChart.moveTo(77.5,155);
drawChart.lineTo(5,155);
drawChart.stroke();
/* Font */

/* Box-11*/
/* Right Line */
drawChart.moveTo(77.5,155);
drawChart.lineTo(77.5,77.5);
drawChart.stroke();
/* Font */
drawChart.font="11px Arial";
drawChart.fillStyle   = "black";
drawChart.fillText("11",36,95);
drawChart.fillText("12",36,20);
drawChart.fillText("1",116.25,20);
drawChart.fillText("2",193.75,20);
drawChart.fillText("3",272.75,20);
drawChart.fillText("4",272.75,95);
drawChart.fillText("5",272.75,175);
drawChart.fillText("6",272.75,255);
drawChart.fillText("7",190,255);
drawChart.fillText("8",115,255);
drawChart.fillText("9",40,255);
drawChart.fillText("10",36,175);

var box12planet01 = chart.getContext("2d");
box12planet01.beginPath();
box12planet01.arc(22, 18, 10, 0, 2 * Math.PI,false);
box12planet01.fillStyle   = "red";
box12planet01.fill();
box12planet01.strokeStyle = "red";
box12planet01.stroke();
box12planet01.fillStyle   = "white";
box12planet01.fillText("Su",15,22);

var box12planet02 = chart.getContext("2d");
box12planet02.beginPath();
box12planet02.arc(42, 35, 10, 0, 2 * Math.PI,false);
box12planet02.fillStyle   = "green";
box12planet02.fill();
box12planet02.strokeStyle = "green";
box12planet02.stroke();
box12planet02.fillStyle   = "white";
box12planet02.fillText("Su",36,38);

var box12planet03 = chart.getContext("2d");
box12planet03.beginPath();
box12planet03.arc(20, 42, 10, 0, 2 * Math.PI,false);
box12planet03.fillStyle   = "blue";
box12planet03.fill();
box12planet03.strokeStyle = "blue";
box12planet03.stroke();
box12planet03.fillStyle   = "white";
box12planet03.fillText("Su",14,45);

var box12planet04 = chart.getContext("2d");
box12planet04.beginPath();
box12planet04.arc(63, 20, 10, 0, 2 * Math.PI,false);
box12planet04.fillStyle   = "blue";
box12planet04.fill();
box12planet04.strokeStyle = "blue";
box12planet04.stroke();
box12planet04.fillStyle   = "white";
box12planet04.fillText("Su",57,23);

var box12planet05 = chart.getContext("2d");
box12planet05.beginPath();
box12planet05.arc(64, 42, 10, 0, 2 * Math.PI,false);
box12planet05.fillStyle   = "#e91e63";
box12planet05.fill();
box12planet05.strokeStyle = "#e91e63";
box12planet05.stroke();
box12planet05.fillStyle   = "white";
box12planet05.fillText("Su",58,45);

var box12planet06 = chart.getContext("2d");
box12planet06.beginPath();
box12planet06.arc(41, 58, 10, 0, 2 * Math.PI,false);
box12planet06.fillStyle   = "#e91e63";
box12planet06.fill();
box12planet06.strokeStyle = "#e91e63";
box12planet06.stroke();
box12planet06.fillStyle   = "white";
box12planet06.fillText("Su",35,61);

var box12planet07 = chart.getContext("2d");
box12planet07.beginPath();
box12planet07.arc(63, 64, 10, 0, 2 * Math.PI,false);
box12planet07.fillStyle   = "#e91e63";
box12planet07.fill();
box12planet07.strokeStyle = "#e91e63";
box12planet07.stroke();
box12planet07.fillStyle   = "white";
box12planet07.fillText("Su",57,67);

var box12planet08 = chart.getContext("2d");
box12planet08.beginPath();
box12planet08.arc(18, 64, 10, 0, 2 * Math.PI,false);
box12planet08.fillStyle   = "#e91e63";
box12planet08.fill();
box12planet08.strokeStyle = "#e91e63";
box12planet08.stroke();
box12planet08.fillStyle   = "white";
box12planet08.fillText("Su",12,67);

}

$(document).ready(function(){
load_chartStyle_northIndia("chart-style-northIndia");
load_chartStyle_southIndia("chart-style-southIndia");
});

</script>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
	<!-- -->
	<div class="list-group">
	<div class="list-group-item">
	<ol>
	 <li>Introduction to Panchangam</li>
	 <li>Vaara (Week)</li>
	 <li>Thithi (Day)</li>
	 <li>Nakshatra (Star)</li>
	 <li>Yoga</li>
	 <li>Karana</li>
	</ol>
	<!-- -->
	</div>
	</div>
	</div><!--/.col-sm-4 -->
    <div class="col-sm-9">
	<!-- -->
	<?php include_once 'templates/panchanga/introduction.php' ?>
	<!-- -->
	</div><!--/.col-sm-9 -->
  </div>
</div>
</body>
</html>
