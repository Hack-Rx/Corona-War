<?php include 'header.php';?>

<center>
	<h2>Enter User ID :</h2>
	<input type ="text" id="user" required="required"><br>
	 <button style="margin-top:10px" id="submit" type="submit" class="btn btn-primary" name="submit" onclick="getdata();">Search..</button>
</center>
<center>
	<p style="margin-top:50px">Corona?:  <strong id="names"></strong></p><br>
	<p>Hospital:  <strong id="genders"></strong></p><br>
	<p>Doctor:  <strong id="ages"></strong></p><br>

</center>


<!-- <iframe style="width:120px;height:240px;margin-top: -10px;margin-bottom: 20px; margin-left: 520px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ayoun8100-21&marketplace=amazon&region=IN&placement=B0899S5DNN&asins=B0899S5DNN&linkId=e4eedfb11cc409ba48a84f6c57dede3f&show_border=true&link_opens_in_new_window=true"></iframe>
<iframe style="width:120px;height:240px;margin-top: -10px;margin-bottom: 20px; margin-left: 150px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ayoun8100-21&marketplace=amazon&region=IN&placement=B0851H66G4&asins=B0851H66G4&linkId=2469a54b191b28394b304ecb32c7bf8a&show_border=true&link_opens_in_new_window=true"></iframe> -->




<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
<script src="Read.js"></script>

<?php include 'footer.php';?>