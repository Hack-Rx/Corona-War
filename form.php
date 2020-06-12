
<?php include 'header.php';?>





    <script type="text/javascript">  
  $(document).ready(function() {
    var text_max = 3000;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>

  
	<div class="container">
	<h1 style="color: rgb(78,138,245);">Patient Form</h1>
       </div>
	<div class="container">
		<h2>Patient Details:- </h2>
		<br>
		<form class="Details" method="post" id="patientForm">
			
				<div class="form-group row">
					<label class="col-sm-4 col-form-label" for="name">Name</label>
					 <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="name" name="name" placeholder="Enter Full Name here..." class="form-control" required="true" value="" type="text"></div>
                            </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label" for="gender">Gender</label>
					<label class="radio-inline">
      <input id="gender" type="radio" name="gender" value='Male' checked>Male
    </label>
    <label class="radio-inline">
      <input id="gender" type="radio" name="gender" value="Female" >Female
    </label>
    <label class="radio-inline">
      <input id="gender" type="radio" name="gender" value="Transgender" >Transgender
    </label>
				</div>
				
        <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="address">Address</label>
                                    <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address" placeholder="Enter Address here..." class="form-control" required="true" value="" type="text"></div>
                            </div>
      </div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="pincode">Pincode</label>
				                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="pincode" name="pincode" placeholder="Enter Pincode here..." class="form-control" required="true" value="" type="text"></div>
                            </div>
			</div>
		
				<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="sell">State</label>
				<div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name='state' id="state">
                                     <option>Andhra Pradesh</option>
                                     <option>Arunachal Pradesh</option>
                                     <option>Assam</option>
                                     <option>Bihar</option>
                                     <option>Chhatisgarh</option>
                                     <option>Goa</option>
                                     <option>Gujarat</option>
                                     <option>Haryana</option>
                                     <option>Himachal Pradesh</option>
                                     <option>Jammu and KAshmir</option>
                                     <option>Jharkhand</option>
                                     <option>Karnataka</option>
                                     <option>Kerala</option>
                                     <option>Madhya Pradesh</option>
                                     <option>Maharashtra</option>
                                     <option>Manipur</option>
                                     <option>Meghalaya</option>
                                     <option>Mizoram</option>
                                     <option>Nagaland</option>
                                     <option>Odisha</option>
                                     <option>Punjab</option>
                                     <option>Rajasthan</option>
                                     <option>Sikkim</option>
                                     <option>Tamil Nadu</option>
                                     <option>Telangana</option>
                                     <option>Tripura</option>
                                     <option>Uttar Pradesh</option>
                                     <option>Uttarakhand</option>
                                     <option>West Bengal</option>
                                  </select>
                               </div>
                            </div>
			</div>
			<div class="form-group row">

					<label class="col-sm-4 col-form-label" for="age">Age Group</label>
					<label class="radio-inline">
      <input id="age" type="radio" name="age" value = "0-9" checked>0-9
    </label>
    <label class="radio-inline">
      <input id="age" type="radio" name="age" value="10-19" >10-19
    </label>
     <label class="radio-inline">
      <input id="age" type="radio" name="age" value="20-24" >20-24
    </label>
     <label class="radio-inline">
      <input id="age" type="radio" name="age" value="25-59" >25-59
    </label>
    <label class="radio-inline">
      <input id="age" type="radio" name="age" value="60+" >60+
    </label>
				</div>




				<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="phono">Phone Number</label>
				<div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phone" placeholder="Enter Phone Number here..." class="form-control" required="true" type="text"></div>
                            </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="email">Email-ID</label>
				 <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Enter Email here.." class="form-control" required="true" type="email"></div>
                            </div>
                        </div>


                        <div class="form-group row">
            <h2> Symptoms :-</h2>
            <br>
          <label class="col-sm-4 col-form-label" for="no_symptoms">No Symptoms</label>
          <label class="radio-inline">
      <input id="noSymptom" type="radio" name="no_symptoms" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="noSymptom" type="radio" name="no_symptoms" value="1" >Yes
    </label>
  </div>

                        <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="fever">Fever</label>
          <label class="radio-inline">
      <input id="fever" type="radio" name="fever" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="fever" type="radio" name="fever" value="1" >Yes
    </label>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="tiredness">Tiredness</label>
          <label class="radio-inline">
      <input id="tiredness" type="radio" name="tiredness" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="tiredness" type="radio" name="tiredness" value="1" >Yes
    </label>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="dry_cough">Dry Cough</label>
          <label class="radio-inline">
      <input id="dryCough" type="radio" name="dry_cough" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="dryCough" type="radio" name="dry_cough" value="1" >Yes
    </label>
  </div>
    <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="difficulty_in_breathing">Difficulty in breathing</label>
          <label class="radio-inline">
      <input id="difficultyBreathing" type="radio" name="difficulty_in_breathing" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="difficultyBreathing" type="radio" name="difficulty_in_breathing" value="1" >Yes
    </label>
  </div>
   <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="sore_throat">Sore Throat</label>
          <label class="radio-inline">
      <input id="soreThroat" type="radio" name="sore_throat" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="soreThroat" type="radio" name="sore_throat" value="1" >Yes
    </label>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="pain">Pain</label>
          <label class="radio-inline">
      <input id="pain" type="radio" name="pain" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="pain" type="radio" name="pain" value="1" >Yes
    </label>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="nasal_congestion">Nasal Congestion</label>
          <label class="radio-inline">
      <input id="nasalCongestion" type="radio" name="nasal_congestion" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="nasalCongestion" type="radio" name="nasal_congestion" value="1" >Yes
    </label>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="runny_nose">Runny Nose</label>
          <label class="radio-inline">
      <input id="runnyNose" type="radio" name="runny_nose" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="runnyNose" type="radio" name="runny_nose" value="1" >Yes
    </label>
  </div>
    <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="diarrhea">Diarrhea</label>
          <label class="radio-inline">
      <input id="diarrhea" type="radio" name="diarrhea" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="diarrhea" type="radio" name="diarrhea" value="1" >Yes
    </label>
  </div>
     <div class="form-group row">
    <label class="col-sm-4 col-form-label" for="none_experiencing">None Experiencing</label>
          <label class="radio-inline">
      <input id="noneExperiencing" type="radio" name="none_experiencing" value = "0" checked>No
    </label>
    <label class="radio-inline">
      <input id="noneExperiencing" type="radio" name="none_experiencing" value="1" >Yes
    </label>
  </div>

        


                        <div class="form-group row">
                        	<label class="col-sm-4 col-form-label" for="textarea">Enter your request here</label>
<div class="col-xs-5">
                    <textarea id="textarea" rows="8" cols="100" maxlength="3000" name="question" placeholder = "Enter your query here..." required="true"></textarea>
<div id="textarea_feedback"></div>


                                    </div>
                        </div>
                        <div class="form-group row">        
      <div class="col-sm-offset-4 col-sm-10">
        <button id="submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
       <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13447.133591780499!2d80.9108633809512!3d26.829400928546686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdc8bfb928d5%3A0x9f9163ace7ebaf6c!2sCharbagh%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1591027989869!5m2!1sen!2sin" width="400" height="400" frameborder="0" style="border:0; margin-left: 50px"  aria-hidden="false" tabindex="0"></iframe> -->
      </div>
  </div>

         <iframe width="1024" height="576" style="margin-left: 60px" src="https://app.developer.here.com/coronavirus/" frameborder="0"></iframe>             

</div>

		</form>
    <div class="alert">Your response has been recorded. Your ID is : [<span style="font-size: 1.2em; color: rgb(227,216,114)"  id="newPostID"></span>]. Please copy this and save it somewhere. Our AI model would process your symptoms and your result will be generated in a couple of minutes. You can check your results in the "View Status" page. Our team works with 100% efficiency towards bringing SOLACE to you in this time of pandemic.</div>
  </div>


 
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
<script src="main.js"></script>
<!-- <script src="app.js"></script> -->

<?php include 'footer.php';?>
