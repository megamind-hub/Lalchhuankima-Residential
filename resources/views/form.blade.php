<!DOCTYPE html>
<html lang="en">
<head>
	<script src="/css/javas.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="design/main.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application for PRC</title>
	<style type="text/css">
	
	</style>
</head>
<body onload="loadAgeSelector()">
	<span class="img"><a href="/"><img src="/css/home.png" width="50px"></a></span>
	<h1>Application for Permanent Residential Certificate</h1>
	<h3>Please fill in the required form(* mark are mendatory)</h3>

	<form class = "form-inline" action="forms" method="POST">
		@csrf
		<fieldset>
			<legend><b>Profile: </b></legend>
		<div class="profile">
			<label for="name">Name:* </label>
				<select id="appellation">
					<option></option>
					<option>Mr</option>
					<option>Mrs</option>
					<option>Dr</option>
					<option>Drs</option>
				</select>
			<input type="text" id="name" name="name" placeholder="Your name" size ="35" maxlength="30" required>

			<label for="dob" style="margin-left: 22px;">DOB: </label>
				<input type="date" id="DOB">

			<label for="age" style="margin-left: 90px;">Age:* </label>
			<input type="number" id="age" name="age" placeholder="Your Age" required>

			

			<label for="gender">Gender:* </label>
				<select id="gender" name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
					<option value="transgender">Transgender</option>
				</select>
		
				<br>

			<label for="email">email: </label>
			<input type="text" id="email" name="email" placeholder="Your email" size="35" style="margin-left: 70px;">
			
			<label for="contact" style="margin-left: 1px;">Contact:* </label>
			<input type="number" id="contact" name="contact" placeholder="Your Contact Number" required>
			<label for="PoB">Place of Birth:* </label>
				<select>  
					<option value="Aizawl">Aizawl</option>  
					<option value="Kolasib">Kolasib</option>  
					<option value="Champhai">Champhai</option>  
					<option value="Lawngtlai">Lawngtlai</option>  
					<option value="Mamit">Mamit</option>  
					<option value="Saiha">Saiha </option>  
					<option value="Serchhip">Serchhip</option>
					<option value="Lunglei">Lunglei</option>
				</select> 
			
				<label for="occupation" style="margin-left: 62px;">Occupation:* </label>
				<input list="occupation" type="text" placeholder="Occupation" required>
				<datalist name="occupation" id="occupation">
					<option value="Farmer">Farmer</option>
					<option value="Business_Man">Business Man</option>
					<option value="Government_Servant">Government Servant</option>
					<option value="Carpenter">Carpenter</option>
					<option value="Labour">Labour</option>
				</datalist>

				<br>

				<label for="income">Monthly income:* </label>
					<input type="number">
	
				<label for="education" style="margin-left: 86px;">Education: </label>
					<input type="text" id="education" name="education" required>
		</div>
		</fieldset>

		<fieldset>
			<legend><b>Relatives: </b></legend>

		<div class="relatives">	
			<label for="fname">Father's Name: </label>
				<select id="relatives">
					<option value="null"></option>
					<option value="mr">Mr</option>
					<option value="dr">Dr</option>
					<option value="upa">Upa</option>
					<option value="pastor">Pastor</option>
					<option value="engineer">Engineer</option>
				</select>
				<input type="text" id="fname" name="fname" maxlength="30" size="30">

			<label for="mname">Mother's Name: </label>
			<select id="relatives">
				<option value="null"></option>
				<option value="mrs">Mrs</option>
				<option value="dr">Dr</option>
				<option value="upa">Engineer</option>
			</select>
				<input type="text" id="mname" name="mname" maxlength="30" size="30">

			<label for="sname">Spouse Name: </label>
			<select id="relatives">
				<option value="null"></option>
				<option value="mr">Mr</option>
				<option value="mrs">Mrs</option>
				<option value="dr">Dr</option>
				<option value="upa">Upa</option>
				<option value="pastor">Pastor</option>
				<option value="engineer">Engineer</option>
			</select>
				<input type="text" id="sname" name="sname" size="30" maxlength="30">
		</div>
		</fieldset>

		<fieldset>
			<legend><b>Address: </b></legend>
		<div class="address">
				<label for="paddress">Present Address/Door No.:* </label>
					<input type="text" id="paddress" name="paddress" size="30" maxlength="60" placeholder="Enter Door Number" required>

				<label for="slocality1">Sub-locality1:* </label>
					<input type="text" id="slocality1" name="slocality1" size="30" maxlength="60" placeholder="Enter Sub Locality 1" required>
				<label for="slocality2">Sub-locality2:* </label>
					<input type="text" id="slocality2" name="slocality2" size="30" maxlength="60" required>

					<br>

				<label for="padd">Present Address location:* </label>
					<select>  
						<option value="Aizawl">Aizawl</option>  
						<option value="Kolasib">Kolasib</option>  
						<option value="Champhai">Champhai</option>  
						<option value="Lawngtlai">Lawngtlai</option>  
						<option value="Mamit">Mamit</option>  
						<option value="Saiha">Saiha </option>  
						<option value="Serchhip">Serchhip</option>
						<option value="Lunglei">Lunglei</option>
						</select>
				<label for="pasd">Present Address Sub-district:* </label>
					<select>  
						<option value="Aibawk">Aibawk</option>  
						<option value="Bilkhawthlir">Bilkhawthlir</option>  
						<option value="Champhai">Champhai</option>  
						<option value="Chawngte">Chawngte</option>  
						<option value="Darlawn">Darlawn</option>  
						<option value="East Lungdar">East Lungdar </option>  
						<option value="East Lungdar (Pt)">East Lungdar (Pt)</option>
						
						<option value="Hnahthial">Hnahthial</option>  
						<option value="Khawbung">Khawbung</option>  
						<option value="Khawzawl">Khawzawl</option>  
						<option value="Lawngtlai">Lawngtlai</option>  
						<option value="Lunglei">Lunglei </option>  
						<option value="Lungsen">Lungsen </option> 
						
						<option value="Hnahthial">Hnahthial</option>  
						<option value="Khawbung">Khawbung</option>  
						<option value="Khawzawl">Khawzawl</option>  
						<option value="Lawngtlai">Lawngtlai</option>  
						<option value="Lunglei">Lunglei </option>  
						<option value="Lungsen">Lungsen </option> 
						
						</select>
				<label for="paddd">Present Address District: </label>
					<select>  
						<option value="Aizawl">Aizawl</option>  
						<option value="Kolasib">Kolasib</option>  
						<option value="Champhai">Champhai</option>  
						<option value="Lawngtlai">Lawngtlai</option>  
						<option value="Mamit">Mamit</option>  
						<option value="Saiha">Saiha </option>  
						<option value="Serchhip">Serchhip</option>
						<option value="Lunglei">Lunglei</option>
					</select>

				<label for="pas">Present Address – State: </label>
				<select name="state" id="state" class="form-control">
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
					</select>

					<br>

				<label for="pcode">Pin Code:* </label>
					<input type="number" id="pcode" name="pcode" maxlength="6" placeholder="Enter pin code" required>
				
				<label for="country">Country: </label>
					<select id="country" name="country">
						<option>Afghanistan</option>
						<option>America</option>
						<option>Argentina</option>
						<option>Australia</option>
						<option>Austria</option>
						<option>Belgium</option>
						<option>Bermuda</option>
						<option>Bhutan</option>
						<option>Brazil</option>
						<option>Cambodi</option>
						<option>Canada</option>
						<option>Chile</option>
						<option>China</option>
						<option>Colombia</option>
						<option>Denmark</option>
						<option>Egypt</option>
						<option>Finland</option>
						<option>France</option>
						<option>Georgia</option>
						<option>Germany</option>
						<option>Greece</option>
						<option>Greenland</option>
						<option>India</option>
						<option>Iran</option>
						<option>Ireland</option>
						<option>Korea</option>
						<option>Russia</option>
					</select>
						
				<label for="police">Present address-Police Station:* </label>
				<input list="police" type="text" placeholder="police" required>
				<datalist name="police" id="police">
					<option>Zonuam Police Outpost</option>
					<option>Bawngkawn Police Station</option>
					<option>Kulikawn Police Station</option>
				</datalist>

				<label for="postO">Post Office:* </label>
					<select>
						<option>Aizawl Head Post Office</option>
						<option>Vaivakawn Post Office</option>
						<option>Chandmari Sub Post Office</option>
					</select>

				<br>

				<label>Details of residence for last 20 years(including direct ancestor):* </label>
					<input type="textarea" maxlength="255" style="height: 50px; width: 588px" required>
			</div>		
		</fieldset>
		<fieldset>
			<legend><b>Address Info:</b></legend>
		<div class="addinfo">
				<label>Place of enrollment on E/Roll Constituency No:* </label>
					<input type="text" maxlength="4" size="25" placeholder="Either applicant/parent" required>

				<label>Constituency Name:* </label>
					<input type="text" maxlength="60" size="30" required>

				<label>Electoral Roll ID Card No.:* </label>
				<input type="text" size="25" required>

				<br>

				<label>Years of residence in the above address:* </label>
				<select id="yearselect"></select>

				<label>Purpose for residential certificate:* </label>
				<input type="textarea" maxlength="255" style="height: 50px; width: 588px" required>
		</div>
		</fieldset>

		<label>Upload necessary file:* </label> <br>
		<input type="file" id="myFile" name="filename"> <br>
		<input type="file" id="myFile1" name="filename"> <br>
		<input type="file" id="myFile2" name="filename"> <br>

		<label>Remark: </label><br>
			<input type="textarea" maxlength="255" style="height: 50px; width: 588px" required>
			<br>

			<div class="declaration">
			<input type="checkbox" id="decleration" class="decleration" style="margin-right: 15px;">
			I hereby declare that all the documents attached are verified with 
				originals.
			</div>
		
		<br>
		<div class="submit">
			<input type="submit" id="submit" value="submit" style="width: 100px">
		</div>
	</form>


    <footer class="foot">
		<div>
			<p  style="margin-right: 30px;">About Us
			<img src="/csss/NeGS.jpg" class="image" width="70px" ALIGN='right'>
			</p>
		</div>
		<div class="texts">
			<p>Contact: 123-456-789</p>
		</div>
		<div class="texts">
			<p><a href="example@gmail.com" style="color:white">email:example@gmail.com</a></p>
		</div>
		<div>
			<p>Copyright 2000</p>
		</div>
	</footer>
</body>
</html>