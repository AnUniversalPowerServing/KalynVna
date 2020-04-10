<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style>
.hr-red { border-color: red; }
.pad0 { padding: 0px; }
.mtop5p { margin-top: 5px; }
.mtop10p { margin-top: 10px; }
.mtop15p { margin-top: 15px; }
.mbot15p { margin-bottom: 15px; }
.mtop35p { margin-top: 35px; }
.hide-block { display: none; }
.font-red { color: red; }
.font-grey { color:#555; }
.font-mdm-grey { color:#666; }
.font-lgt-grey { color:#ccc; }
code { font-weight: bold;font-size: 11px; }
hr { margin-bottom: 10px; }
.bg-grey { background-color:#f5f5f5; }
.mtop65p { margin-top:85px; }
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



<div class="container-fluid mtop15p">
<div class="row">
<div align="center" class="col-xs-12">
<b>South-Indian Style Chart</b>
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div  class="col-xs-12">
<!-- -->
<canvas id="chart-style-southIndia" width="325" height="325">
Your Browser doesn't support
</canvas>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

<div class="container-fluid mtop15p">
<div class="row">
<div align="center" class="col-xs-12">
<b>North-Indian Style Chart</b>
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div  class="col-xs-12">
<!-- -->
<canvas id="chart-style-northIndia" width="325" height="325">
Your Browser doesn't support
</canvas>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

<div class="container-fluid mtop15p">
<div class="row">
<div  class="col-xs-12">
<!-- -->
<div><b>Hindu Calendar</b></div>
<div>
Hindu Calendar is of two types:
<ol>
<li>Solar Calendar (<i>Saura Maana</i>)</li>
<li>Lunar Calendar (<i>Chandra Maana</i>)</li>
</ol>
Hindu Calendar starts with local sunrise and It 
consists of Five properties (Panch-anga):
<ol>
<li>Tithi (Moon Phase with respect to Sun's position)</li>
<li>Vaasara (Weekdays)</li>
<li>Nakshatra (Moon settles at a Star during Sun-rise)</li>
<li>Yoga</li>
<li>Karana</li>
</ol>
</div>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div align="center" class="col-xs-12">
<!-- -->
<div><b>Tithi</b></div>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div class="col-xs-12">
<!-- -->
<div class="list-group">
<div class="list-group-item">
Tithi is considered as the longitudinal 
angle between Sun and the Moon from the Earth.
A lunar month consists of 30 tithis whose 
start time and duration vary.<br/>
Each tithi is calculated by 12&#176; where 
360&#176; a month.
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div align="center" class="col-xs-12">
<!-- -->
<div><b>Yoga and Karana</b></div>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
<div  class="col-xs-12">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<b>Yoga</b>
</div>
<div class="list-group-item">
Yoga is formed by two karanas.
Special Calculation for separating the 
distance of the Sun and the Moon.
</div><!--/.list-group-item -->
<div class="list-group-item">
<div><b>27 Yogas:</b></div>
<div>
<ol>
<li>
<div><b>VISHKAMBHA</b> (Supported)</div> 
<div>prevails over others, victorious over enemies, obtains property, wealthy.</div>
</li>
<li>
<div><b>PRITI</b> (Fondness) </div>
<div>well-liked, attracted to the opposite sex, enjoys life with contentment.</div>
</li>
<li>
<div><b>AYUSHMAN</b> (Long-lived)</div> 
<div>good health and longevity, energetic.</div>
</li>
<li>
<div><b>SAUBHAGYA</b> (Good Fortune)</div>
<div>enjoys a comfortable life full of opportunities, happy.</div>
</li>
<li>
<div><b>SOBHANA</b> (Splendor)</div>
<div>lustrous body and demeanor sensualist, obsessed with sex.</div>
</li>
<li>
<div><b>ATIGANDA</b> (Danger or obstacles)</div>
<div>difficult life due to numerous obstacles and accidents; revengeful and angry.</div>
</li>
<li>
<div><b>SUKARMA</b> (Virtuous)</div> 
<div>performs noble deeds, magnanimous and charitable, wealthy.</div>
</li>
<li>
<div><b>DHRITI</b> (Determination)</div>
<div>enjoys the wealth, goods and spouses of others; indulges in the hospitality of others.</div>
</li>
<li>
<div><b>SOOLA</b> (Spear, Pain)</div>
<div>confrontational and contrary, quarrelsome, angry.</div>
</li>
<li>
<div><b>GANDA</b> (Danger or obstacles)</div>
<div>flawed morals or ethics, troublesome personality.</div>
</li>
<li>
<div><b>VRIDDHA</b> (Growth)</div>
<div>intelligent, opportunistic and discerning; life constantly improves with age.</div>
</li>
<li>
<div><b>DHRUVA</b> (Constant)</div>
<div>steady character, able to concentrate and persist, wealthy.</div>
</li>
<li>
<div><b>VYAGATHA</b> (Beating)</div>
<div>cruel, intent on harming others.</div>
</li>
<li>
<div><b>HARSHANA</b> (Thrilling)</div>
<div>intelligent, delights in merriment and humor.</div>
</li>
<li>
<div><b>VAJRA</b> (Diamond, Thunderbolt)</div>
<div>well-off, lecherous, unpredictable, forceful</div>
</li>
<li>
<div><b>SIDDHI</b> (Success)</div>
<div>skillful and accomplished in several areas; protector 
and supporter of others.</div>
</li>
<li>
<div><b>VYATAPATA</b> (Calamity)</div>
<div>prone to sudden mishaps and 
reversals, fickle and unreliable.</div>
</li>
<li>
<div><b>VARIYAN</b> (Comfort)</div>
<div>loves ease and luxury, lazy, lascivious.</div>
</li>
<li>
<div><b>PARIGHA</b> (Obstruction)</div>
<div>encounters many obstacles to progress in life; 
irritable and meddlesome.</div>
</li>
<li>
<div><b>SIVA</b> (Auspicious)</div>
<div>honored by superiors and government, 
placid, learned and religious, wealthy.</div>
</li>
<li>
<div><b>SIDDHA</b> (Accomplished)</div>
<div>accommodating personality, pleasant 
nature, interest in ritual and 
spirituality.</div>
</li>
<li>
<div><b>SADHYA</b> (Amenable)</div>
<div>well behaved, accomplished
 manners and etiquette.</div>
</li>
<li>
<div><b>SUBHA</b> (Auspicious)</div>
<div>lustrous body and personality,
 but problems with health; wealthy, 
 irritable.</div>
</li>
<li>
<div><b>SUKLA</b> (Bright White)</div>
<div>garrulous and flighty, 
impatient and impulsive; unsteady 
and changeable mind.</div>
</li>
<li>
<div><b>BRAHMA</b> (Priest, God)</div>
<div>trustworthy and confidential, 
ambitious, good discernment and 
judgment.</div>
</li>
<li>
<div><b>INDRA</b> (Chief)</div>
<div>interest in education and
knowledge; helpful, well-off.</div>
</li>
<li>
<div><b>VAIDHRITI</b> (Poor Support)</div>
<div>critical, scheming nature; powerful
 and overwhelming mentally or physically.</div>
</li>
</ol>
</div>
</div>
</div><!--/.list-group -->
<!-- -->

<!-- -->
<div class="list-group">
<div class="list-group-item">
<b>Karanas</b>
</div>
<div class="list-group-item">
Each tithi has two karanas.
Karana plays an important role in the 
process of finding Muhurta (right time) 
for any deed or action.
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->


</div><!--/.col-xs-12 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

<div class="container-fluid mtop15p">
<div class="row">
<div align="center" class="col-xs-12">
<!-- -->
<b>Amanta, Purnimanta systems</b>
<!-- -->
</div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row mtop15p">
<div  class="col-xs-12">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<div align="center"><b>Amanta System</b></div>
</div>
<div class="list-group-item">
<div>
Amanta System ends the 
lunar month on no Moon day.
</div>
<div><b>States that follow:</b></div>
<div>
Gujarat,Maharashtra,Karnataka,
Kerala,Tamilnadu,Andhra pradesh,
Telangana, and West Bengal.
</div>
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->
<!-- -->
<div class="list-group">
<div class="list-group-item">
<div align="center"><b>Purnimanta System</b></div>
</div>
<div class="list-group-item">
<div>
Purnimanta System ends the 
lunar month on full Moon day.
</div>
<div><b>States that follow:</b></div>
<div>
Other States in India
</div>
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->
</div><!--/.col-xs-12 -->
<div  class="col-xs-12">
<!-- -->
<div class="list-group">
<div class="list-group-item">
<!-- -->

<!-- -->
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->

</div><!--/.col-xs-12 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>
