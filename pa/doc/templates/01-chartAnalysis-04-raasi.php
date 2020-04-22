<script type="text/javascript">
$(document).ready(function(){
  $('input[type=checkbox]').bootstrapToggle();
});
</script>
<!-- Check Longitude / Sphuta with Format Calculator ::: Start -->
<div id="checkLongitudeFormatCalculator" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Check Longitude / Sphuta with Format Calculator</b></h4>
      </div><!--/.modal-header -->
      <div class="modal-body">
        <!-- -->
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-xs-12">
			 <!-- -->
			 <div class="form-group">
			   <label>Choose a Format</label>
			   <div class="checkbox">
				 <label>
				 <input id="longitudeFormat_01" type="checkbox" data-on="Input" data-off="Input" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">&emsp;
				 <input id="longitudeFormat_01" type="checkbox" data-on="Output" data-off="Output" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">
				 <b>1 <sup>0</sup> 1' 1''</b> (360<sup>0</sup> Format)</label>
			   </div>
			   <div class="checkbox">
				 <label>
				 <input id="longitudeFormat_02" type="checkbox" data-on="Input" data-off="Input" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">&emsp;
				 <input id="longitudeFormat_02" type="checkbox" data-on="Output" data-off="Output" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">
				 <b>1 <sup>0</sup> 1' 1'' in Ar</b> (30<sup>0</sup> Format)</label>
			   </div>
			   <div class="checkbox">
				 <label>
				 <input id="longitudeFormat_03" type="checkbox" data-on="Input" data-off="Input" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">&emsp;
				 <input id="longitudeFormat_03" type="checkbox" data-on="Output" data-off="Output" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">
				 <b>1 <sup>0</sup> Ar 1' 1''</b> (30<sup>0</sup> Format - On Sign Representation)</label>
			   </div>
			   <div class="checkbox">
				 <label>
				 <input id="longitudeFormat_04" type="checkbox" data-on="Input" data-off="Input" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">&emsp;
				 <input id="longitudeFormat_04" type="checkbox" data-on="Output" data-off="Output" data-toggle="toggle" data-width="100" data-size="mini" data-onstyle="success">
				 <b>1s 1 <sup>0</sup> 1' 1''</b> (30<sup>0</sup> Format - From 1st Sign)</label>
			   </div>
			 </div><!--/.form-group -->
			 <!-- -->
		    </div><!--/.col-xs-12 -->
		  </div><!--/.row -->
		  <div class="row">
			<div class="col-xs-12">
			 <!-- -->
			 <div class="form-group">
			   <label>Provide your Input</label>
			   <!-- 360 degrees Format  ::: Start -->
			   <div class="row mtop15p">
			    <div class="col-xs-4"><div class="mtop15p"><b>360<sup>0</sup> Format:</b></div></div><!--/.col-xs-4 -->
				<div class="col-xs-8">
				  <!-- -->
				  <div class="row">
					<div class="col-xs-4"><b>Degree</b></div><!--/.col-xs-4 -->
					<div class="col-xs-4"><b>Minutes</b></div><!--/.col-xs-4 -->
					<div class="col-xs-4"><b>Seconds</b></div><!--/.col-xs-4 -->
			      </div><!--/.row -->
			      <div class="row">
			        <div class="col-xs-4"><input type="text" class="form-control"/></div><!--/.col-xs-4 -->
				    <div class="col-xs-4"><input type="text" class="form-control"/></div><!--/.col-xs-4 -->
				    <div class="col-xs-4"><input type="text" class="form-control"/></div><!--/.col-xs-4 -->
			      </div><!--/.row -->
				  <!-- -->
				</div><!--/.col-xs-8 -->
			   </div><!--/.row -->
			   <!-- 360 degrees Format  ::: End -->
			   <!-- 30 degrees Format  ::: Start -->
			   <div class="row mtop15p">
			    <div class="col-xs-4"><div class="mtop15p"><b>30<sup>0</sup> Format:</b></div></div><!--/.col-xs-4 -->
				<div class="col-xs-8">
				  <!-- -->
				  <div class="row">
					<div class="col-xs-3"><b>Degree</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Minutes</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Seconds</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Sign</b></div><!--/.col-xs-3 -->
			      </div><!--/.row -->
			      <div class="row">
			        <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
					<div class="col-xs-3">
					  <select class="form-control">
					   <option value="Ar">Ar</option>
					  </select>
					</div><!--/.col-xs-3 -->
			      </div><!--/.row -->
				  <!-- -->
				</div><!--/.col-xs-8 -->
			   </div><!--/.row -->
			   <!-- 30 degrees Format  ::: End -->
			   <!-- 30 degrees - On Sign Representation  ::: Start -->
			   <div class="row mtop15p">
			    <div class="col-xs-4"><div class="mtop15p"><b>30<sup>0</sup> Format - On Sign Representation</b></div></div><!--/.col-xs-4 -->
				<div class="col-xs-8">
				  <!-- -->
				  <div class="row">
					<div class="col-xs-3"><b>Degree</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Sign</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Minutes</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Seconds</b></div><!--/.col-xs-3 -->
			      </div><!--/.row -->
			      <div class="row">
			        <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
					<div class="col-xs-3">
					  <select class="form-control">
					   <option value="Ar">Ar</option>
					  </select>
					</div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
			      </div><!--/.row -->
				  <!-- -->
				</div><!--/.col-xs-8 -->
			   </div><!--/.row -->
			   <!-- 30 degrees - On Sign Representation  ::: End -->
			   <!-- 30 degrees - From 1st Sign Representation  ::: Start -->
			   <div class="row mtop15p">
			    <div class="col-xs-4"><div class="mtop15p"><b>30<sup>0</sup> Format - From 1st Sign Representation</b></div></div><!--/.col-xs-4 -->
				<div class="col-xs-8">
				  <!-- -->
				  <div class="row">
				    <div class="col-xs-3"><b>Sign</b></div><!--/.col-xs-3 -->	
					<div class="col-xs-3"><b>Degree</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Minutes</b></div><!--/.col-xs-3 -->
					<div class="col-xs-3"><b>Seconds</b></div><!--/.col-xs-3 -->
			      </div><!--/.row -->
			      <div class="row">
				    <div class="col-xs-3">
					  <select class="form-control">
					   <option value="1">1s</option>
					  </select>
					</div><!--/.col-xs-3 -->
			        <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
				    <div class="col-xs-3"><input type="text" class="form-control"/></div><!--/.col-xs-3 -->
			      </div><!--/.row -->
				  <!-- -->
				</div><!--/.col-xs-8 -->
			   </div><!--/.row -->
			   <!-- 30 degrees - From 1st Sign Representation  ::: End -->
			 </div><!--/.form-group -->
			 <div class="form-group">
			   <button class="btn btn-primary form-control"><b>Get Selected Output Formats</b></button>
			 </div><!--/.form-group -->
			 <!-- -->
		    </div><!--/.col-xs-6 -->
		  </div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
      </div><!--/.modal-body -->
    </div><!--/.modal-content -->
  </div><!--/.modal-dialog -->
</div><!--/.modal -->
<!-- Check Longitude / Sphuta with Format Calculator ::: End --->

<div class="row">
 <div align="center" class="col-xs-12"><h4><b>Raasi : The Signs of the Zodiac</b></h4></div><!--/.col-xs-12 -->
</div>
<div class="row" style="line-height:23px;">
 <div class="col-xs-5">
  <div>
  The positions of all these planets, upagrahas, lagna and special lagnas in the zodiac
  are measured in degrees, minutes and seconds from the start of the zodiac. When watched from earth, 
  the longitude / sphuta of any planet in the sky can be from 0<sup>0</sup> 0' 0'' 
  (0 degrees 0 minutes 0 seconds) to 359<sup>0</sup> 59' 59''.
  </div>
 </div><!--/.col-xs-12 -->
 <div class="col-xs-7">
  <!-- -->
  <div class="list-group">
  <div class="list-group-item">
   It should be noted that 0<sup>0</sup> 0' 0'' corresponds to the beginning of the zodiac (Considering it as
   a fixed point in the sky).
  </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <!-- -->
  <div><h5><b>Tropical Zodiac (Sayana) and Sidereal Zodiac (Nirayana)</b></h5></div>
  <div>
    Western Astrologers consider moving Zodiac which is called as Tropical Zodiac (Sayana).
	Vedic Astrologers consider fixed Zodiac which is called as Sidereal Zodiac (Nirayana).
  </div>
 </div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
 <div class="col-xs-12">
  <!-- -->
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Houses / Constellation</th>
		<th>House<br/> Symbol</th>
        <th>Swamy Graha<br/> (Lord Planet)</th>
        <th>Uchcha Graha<br/> (Exalted Planet)</th>
		<th>Neecha Graha<br/> (Debilitated Planet)</th>
		<th>Longitude / Sphuta<br/> starts - ends</th>
      </tr>
    </thead>
	<tbody>
      <tr>
        <td>1</td>
        <td>Aries (Mesha Raasi)</td>
		<td><b>Ar</b></td>
        <td>Mars</td>
        <td>Sun</td>
		<td>Saturn</td>
		<td>0<sup>0</sup> 0' 0'' to 29<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>2</td>
        <td>Taurus (Vrushabha Raasi)</td>
		<td><b>Ta</b></td>
        <td>Venus</td>
        <td>Moon</td>
		<td>-</td>
		<td>30<sup>0</sup> 0' 0'' to 59<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>3</td>
        <td>Gemini (Midhuna Raasi)</td>
		<td><b>Ge</b></td>
        <td>Mercury</td>
        <td>Rahu</td>
		<td>Ketu</td>
		<td>60<sup>0</sup> 0' 0'' to 89<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>4</td>
        <td>Cancer (Karkataka Raasi)</td>
		<td><b>Cn</b></td>
        <td>Moon</td>
        <td>Jupiter</td>
		<td>Mars</td>
		<td>90<sup>0</sup> 0' 0'' to 119<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>5</td>
        <td>Leo (Simha Raasi)</td>
		<td><b>Le</b></td>
        <td>Sun</td>
        <td>-</td>
		<td>-</td>
		<td>120<sup>0</sup> 0' 0'' to 149<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>6</td>
        <td>Virgo (Kanya Raasi)</td>
		<td><b>Vi</b></td>
        <td>Mercury</td>
        <td>Mercury</td>
		<td>Venus</td>
		<td>150<sup>0</sup> 0' 0'' to 179<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>7</td>
        <td>Libra (Thula Raasi)</td>
		<td><b>Li</b></td>
        <td>Venus</td>
        <td>Saturn</td>
		<td>Sun</td>
		<td>180<sup>0</sup> 0' 0'' to 209<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>8</td>
        <td>Scorpio (Vruchika Raasi)</td>
		<td><b>Sc</b></td>
        <td>Mars</td>
        <td>-</td>
		<td>Moon</td>
		<td>210<sup>0</sup> 0' 0'' to 239<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>9</td>
        <td>Saggitarius (Dhanur Raasi)</td>
		<td><b>Sg</b></td>
        <td>Jupiter</td>
        <td>Ketu</td>
		<td>Rahu</td>
		<td>240<sup>0</sup> 0' 0'' to 269<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>10</td>
        <td>Capricorn (Makara Raasi)</td>
		<td><b>Cp</b></td>
        <td>Saturn</td>
        <td>Mars</td>
		<td>Jupiter</td>
		<td>270<sup>0</sup> 0' 0'' to 299<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>11</td>
        <td>Aquarius (Khumbha Raasi)</td>
		<td><b>Aq</b></td>
        <td>Saturn</td>
        <td>-</td>
		<td>-</td>
		<td>300<sup>0</sup> 0' 0'' to 329<sup>0</sup> 59' 59''</td>
      </tr>
	  <tr>
        <td>12</td>
        <td>Pisces (Meena Raasi)</td>
		<td><b>Pi</b></td>
        <td>Jupiter</td>
        <td>Venus</td>
		<td>Mercury</td>
		<td>330<sup>0</sup> 0' 0'' to 359<sup>0</sup> 59' 59''</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="list-group">
   <div class="list-group-item">
     <div class="row">
	 <div class="col-xs-6"><b>Exalted Planet -</b> Planet will be happy and very powerful.</div>
	 <div class="col-xs-6"><b>Debilitated Planet -</b> Planet will be weak.</div>
	 </div>
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->

  <div class="list-group">
   <div class="list-group-item">
    <div class="row">
	 <div align="center" class="col-xs-12"><b>Longitude / Sphuta Exercise</b></div>
	 <div align="right" class="col-xs-12 mtop15p">
	   <button class="btn btn-sm btn-primary" data-backdrop="static" data-toggle="modal" data-target="#checkLongitudeFormatCalculator">
		 <b>Check Longitude / Sphuta with Format Calculator</b>
	   </button>
	 </div>
	</div><!--/.row -->
	<div class="row mtop15p">
	 <div class="col-xs-4">
	   <!-- -->
	   <div><b>Jupiter is at 94<sup>0</sup> 19'</b></div>
	   <ol style="line-height:22px;">
	    <li>Jupiter lies in <b>Cn</b> between longitudes 90<sup>0</sup> 0' 0'' to 119<sup>0</sup> 59' 59''</li>
	    <li>Its advancement from the start of the rasi (<b>Cn</b>) occupied is 4<sup>0</sup> 19'</li>
		<li>It is expressed by Astrologers as 
		  <ol type="a">
		    <li><b>4<sup>0</sup> 19' in Cn</b></li>
			<li><b>4 Cn 19</b></li>
			<li><b>3s 4<sup>0</sup> 19'</b> (After completing 3 signs, advanced by 4<sup>0</sup> 19' in
				the 4th sign which is Cancer / Karkataka Raasi)</li>
		  </ol>
		</li>
	   </ol>
	   <!-- -->
	 </div><!--/.col-xs-4 -->
	 <div class="col-xs-4" style="border-left:1px solid #ccc;border-right:1px solid #ccc;">
	   <!-- -->
	   <div><b>Mercury is at 5s 17<sup>0</sup> 45'</b></div>
	   <ol style="line-height:22px;">
	    <li>Mercury lies after completing 5 signs, advanced by 17<sup>0</sup> 45' in the 6th Sign which is 
		  Virgo / Kanya Raasi.
		</li>
	    <li>Mercury lies in <b>Vi</b> between longitudes 150<sup>0</sup> 0' 0'' to 179<sup>0</sup> 59' 59''</li>
		<li>Mercury is at 167<sup>0</sup> 45' 0''</li>
		<li>It is expressed by Astrologers as 
		  <ol type="a">
		    <li>167<sup>0</sup> 45' 0'' in Vi</b></li>
			<li><b>17 Cn 45</b></li>
			<li><b>5s 17<sup>0</sup> 45'</b> (After completing 5 signs, advanced by 17<sup>0</sup> 45' in
				the 4th sign which is Virgo / Kanya Raasi)</li>
		  </ol>
		</li>
	   </ol>
	   <!-- -->
	 </div><!--/.col-xs-4 -->
	 <div class="col-xs-4">
	   <!-- -->
	   <div><b>Venus is at 25 Li 31.</b></div>
	   <ol style="line-height:22px;">
	    <li>Venus lies in <b>Li</b> between longitudes 180<sup>0</sup> 0' 0'' to 209<sup>0</sup> 59' 59''</li>
	    <li>Venus is at 205<sup>0</sup> 31' 0''</li>
		<li>It is expressed by Astrologers as 
		  <ol type="a">
		    <li><b>205<sup>0</sup> 31' 0'' in Li</b></li>
			<li><b>25 Li 31</b></li>
			<li><b>6s 25<sup>0</sup> 31'</b> (After completing 6 signs, advanced by 4<sup>0</sup> 19' in
				the 7th sign which is Libra / Thula Raasi)</li>
		  </ol>
		</li>
	   </ol>
	   <!-- -->
	 </div><!--/.col-xs-4 -->
	 </div><!--/.row -->
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <!-- -->
 </div><!--/.col-xs-12 -->
</div><!--/.row -->
<div class="row">
 <div class="col-xs-6">
   <div><h5><b>Bhavas (houses)</b></h5></div>
   <div>

   </div>
 </div><!--/.col-xs-6 -->
 <div class="col-xs-6">
   <div><h5><b>Vargas</b></h5></div>
   <div>
    Each rasi again has many kinds of divisions and they are called <i>vargas</i>.
   </div>
 </div><!--/.col-xs-6 -->
</div><!--/.row -->