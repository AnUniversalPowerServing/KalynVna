<h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
 2. Birth, Zodiac and Community Background
</h4>
<div class="form-group">
  <label>Date and Time of Birth <span class="mandatoryField">*</span></label>
  <div class="col-xs-12 mbot10p pad0">
	<div class="col-xs-6 pad0">
	  <input type="date" id="reg_user_shakha" class="form-control"/>
	</div>
	<div class="col-xs-6 pad0">
	  <input type="time" id="reg_user_shakha" class="form-control"/>
	</div>
  </div>
</div>
<div class="form-group">
 <label>Place of Birth <span class="mandatoryField">*</span></label>
 <input type="text" id="reg_user_shakha" class="form-control" placeholder="Enter your Place of Birth"/>
</div>
<div class="form-group">
 <label>Shakha <span class="mandatoryField">*</span></label>
 <select id="reg_user_shakha" class="form-control" onchange="display_list_upaShakha('reg_user_shakha','reg_user_upaShakha');">
	<option value="">Select your Shakha</option>
 </select>
</div>
<div class="form-group">
 <label>UpaShakha <span class="mandatoryField">*</span></label>
 <select id="reg_user_upaShakha" class="form-control">
	<option value="">Select your UpaShakha</option>
 </select>
</div>
<div class="form-group">
 <label>Gothram <span class="mandatoryField">*</span></label>
 <select id="reg_user_gothram" class="form-control">
    <option value="">Select your Gothram</option>
 </select>
</div>
<div class="form-group">
  <label>Raasi (Zodaic Sign) <span class="mandatoryField">*</span></label>
  <select id="reg_user_raasi" class="form-control" onchange="javascript:display_list_Nakshatra('reg_user_raasi','reg_user_nakshatra');">
	<option value="">Select your Raasi (Zodiac Sign)</option>
	<option value="Aries (Mesha Raasi)">Aries (Mesha Raasi)</option>
	<option value="Taurus (Vrushabha Raasi)">Taurus (Vrushabha Raasi)</option>
	<option value="Gemini (Midhuna Raasi)">Gemini (Midhuna Raasi)</option>
	<option value="Cancer (Karkataka Raasi)">Cancer (Karkataka Raasi)</option>
	<option value="Leo (Simha Raasi)">Leo (Simha Raasi)</option>
	<option value="Virgo (Kanya Raasi)">Virgo (Kanya Raasi)</option>
	<option value="Libra (Thula Raasi)">Libra (Thula Raasi)</option>
	<option value="Scorpio (Vruchika Raasi)">Scorpio (Vruchika Raasi)</option>
	<option value="Saggitarius (Dhanur Raasi)">Saggitarius (Dhanur Raasi)</option>
	<option value="Capricorn (Makara Raasi)">Capricorn (Makara Raasi)</option>
	<option value="Aquarius (Khumbha Raasi)">Aquarius (Khumbha Raasi)</option>
	<option value="Pisces (Meena Raasi)">Pisces (Meena Raasi)</option>
   </select>
</div>
<div class="form-group">
   <label>Star (Nakshatra) <span class="mandatoryField">*</span></label>
   <select id="reg_user_nakshatra" class="form-control">
	  <option value="">Select your Star (Nakshatra)</option>
   </select>
</div>