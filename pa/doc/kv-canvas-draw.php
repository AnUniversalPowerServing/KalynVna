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
