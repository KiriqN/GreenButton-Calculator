<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K7XX3BN');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TMMTBM7');</script>
<!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">
	<script src="js/ua-parser.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
    <html>

   



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="https://greenbutton.co.za/">
      <img src="images/gb-logo2022-v1.png" alt="" width="150" >
    </a>
  </div>
</nav>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $carePlan = $_POST["plan"];
    //echo $firstName . "<br>";
    
    $coverPlan = $_POST["cover"];
    //echo $lastName . "<br>";
    
    
    $agePlan = $_POST["age"];
    //echo $Number . "<br>";
        
    $amount = $_POST["amount"];
    



    $url = "https://leadrelayplatform.com/FPC/api/index.php/plan/option/instalment/$carePlan/$coverPlan/$amount/$agePlan";

    $ch = curl_init( $url );
                                curl_setopt( $ch, CURLOPT_HTTPGET, 1);
                                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                                curl_setopt( $ch, CURLOPT_HEADER, 0);
                                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

                                $response = curl_exec( $ch );

                                json_encode($response);

                               

//print $url;

echo "</br>"; 

//echo $response;



$rest = explode(':', $response);
//print_r($rest);
preg_match("/\d*/", $rest[3], $randValue);
echo "<script>
         $(window).load(function(){
             $('#myModal').modal('show');
         });
    </script>";
//print_r ($randValue);
//echo $rest;

//print $carePlan;
}

?>

<div class="container">
				<div class="row">
          <div id="rectangle">
                <div class="rectangle">
                <div class="rectangleContent">
                
                <?php
                
                
                echo "<br>";
                echo "<div class='rectangleContentGreen'>";
                echo "R";
                if (!empty($response)) {
                print_r  ($randValue[0]);
                echo "*";
              }
                echo "<script>$('#myModal').modal('show')</script>";
                echo "</div>";
                echo "<div class='rectangleContent2'> Please note, the returned premium estimate is a projection only </div>";
                echo "<a href='http://greenbutton.co.za/'>Contact Us</a> to confirm this quote.";
                
                
                

                
                ?>
                </div>
                </div>
</div>
</div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-K7XX3BN
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="container">
				<div class="row">
        

<form id="regForm" action="" method="post" >
<h2> Funeral Cover Calculator</h2>
<h4>Only four quick questions to get a premium estimate!</h4>
<!-- One "tab" for each step in the form: -->
<div class="tab">
                                  <p>What level of cover are you looking for?</p>
                                  
                                  <label for="Care Plan"> 
                                  <input type="radio" id="1" name="plan" value="1" >
                                  <strong>Care plan</strong> - simple funeral cover up to R50,000 (increasing cover and premiums)</label> 
                                  <br>
                                  <label for="Standard Plan"> 
                                  <input type="radio" id="3" name="plan" value="3" >
                                  <strong>Standard plan</strong> - cover up to R70,000 with a terminal illness benefit and premiums back</label> 
                                  <br>
                                  <label for="Comprehensive Plan">
                                  <input type="radio" id="2" name="plan" value="2">
                                  <strong>Comprehensive plan</strong> - cover up to R70,000 with a terminal illness benefit, premiums back, double cover on accidental death</label> 

</div>                            
<div class="tab">
                                    <p>Who are you wanting to cover with a funeral plan?</p>
                                    <input type="radio" id="single" name="cover" value="3">
                                    <label for="single">I am single and want to cover myself</label><br><br>
                                    <input type="radio" id="family" name="cover" value="2">
                                    <label for="family">I have a family and want to cover myself, my spouse or child</label><br><br>
                                    <input type="radio" id="single-parent" name="cover" value="5">
                                    <label for="single-parent">I am a single parent and want to cover myself or child</label><br><br>
                                    <input type="radio" id="cover-parent" name="cover" value="4">
                                    <label for="cover-parent">I want to cover a parent such as a mother, father or in-law</label><br><br>
                                    <input type="radio" id="extend-family" name="cover" value="6">
                                    <label for="extend-family">I want to cover an extended family member such as brother or aunt</label><br><br>
</div>

<div class="tab">
    
                                    <p>How old is the person being covered?</p>

                                    <div class="individual-family-single" id="individual-family-single">

                                    <input type="radio" id="0-19" name="age" value="1">
                                    <label for="0-19">UP TO 19 years</label><br>
                                    <input type="radio" id="20-24" name="age" value="2">
                                    <label for="20-24">20-24</label><br>  
                                    <input type="radio" id="25-29" name="age" value="3">
                                    <label for="25-29">25-29</label><br>
                                    <input type="radio" id="30-34" name="age" value="4">
                                    <label for="30-34">30-34</label><br>
                                    <input type="radio" id="35-39" name="age" value="5">
                                    <label for="35-39">35-39</label><br>
                                    <input type="radio" id="40-44" name="age" value="6">
                                    <label for="40-44">40-44</label><br>
                                    <input type="radio" id="45-49" name="age" value="7">
                                    <label for="45-49">45-49</label><br>
                                    <input type="radio" id="50-54" name="age" value="8">
                                    <label for="50-54">50-54</label><br>
                                    <input type="radio" id="55-59" name="age" value="9">
                                    <label for="55-59">50-59</label><br>
                                    <input type="radio" id="60-65" name="age" value="10">
                                    <label for="60-65">60-65</label><br><br>

                                    </div>

                                    <div class="parent-cover" id="parent-cover">
                                    <input type="radio" id="0-49" name="age" value="1">
                                    <label for="0-49">UP TO 49 years</label><br>
                                    <input type="radio" id="50-54" name="age" value="2">
                                    <label for="50-54">50-54</label><br>  
                                    <input type="radio" id="55-59" name="age" value="3">
                                    <label for="55-59">55-59</label><br>
                                    <input type="radio" id="60-64" name="age" value="4">
                                    <label for="60-64">60-64</label><br>
                                    <input type="radio" id="65-69" name="age" value="5">
                                    <label for="65-69">65-69</label><br>
                                    <input type="radio" id="70-74" name="age" value="6">
                                    <label for="70-74">70-74</label><br>
                                    <input type="radio" id="75-79" name="age" value="7">
                                    <label for="75-79">75-79</label><br>
                                    <input type="radio" id="80-84" name="age" value="8">
                                    <label for="80-84">80-84</label><br>
                                    <br><br> 
</div>


<div class="extended-cover" id="extended-cover">
                                     <input type="radio" id="0-19" name="age" value="1">
                                    <label for="0-19">UP TO 19 years</label><br>
                                    <input type="radio" id="20-29" name="age" value="2">
                                    <label for="20-29">20-29</label><br>  
                                    <input type="radio" id="30-39" name="age" value="3">
                                    <label for="30-39">30-39</label><br>
                                    <input type="radio" id="40-49" name="age" value="4">
                                    <label for="40-49">40-49</label><br>
                                    <input type="radio" id="50-59" name="age" value="5">
                                    <label for="50-59">50-59</label><br>
                                    <input type="radio" id="60-64" name="age" value="6">
                                    <label for="60-64">60-64</label><br>
                                    <input type="radio" id="65-69" name="age" value="7">
                                    <label for="65-69">65-69</label><br>
                                    <input type="radio" id="70-74" name="age" value="8">
                                    <label for="70-74">70-74</label><br>
                                    <input type="radio" id="75-79" name="age" value="9">
                                    <label for="75-79">75-79</label><br>
                                    <input type="radio" id="80-84" name="age" value="10">
                                    <label for="80-84">80-84</label><br><br>
                                    <br><br> 
</div>

<div class="comprehensive-cover" id="comprehensive-cover">
                                     <input type="radio" id="0-19" name="age" value="1">
                                    <label for="0-19">UP TO 19 years</label><br>
                                    <input type="radio" id="20-24" name="age" value="2">
                                    <label for="20-24">20-24</label><br>  
                                    <input type="radio" id="25-29" name="age" value="3">
                                    <label for="25-29">25-29</label><br>
                                    <input type="radio" id="30-34" name="age" value="4">
                                    <label for="30-34">30-34</label><br>
                                    <input type="radio" id="35-39" name="age" value="5">
                                    <label for="35-39">35-39</label><br>
                                    <input type="radio" id="40-44" name="age" value="6">
                                    <label for="40-44">40-44</label><br>
                                    <input type="radio" id="45-49" name="age" value="7">
                                    <label for="45-49">45-49</label><br>
                                    <input type="radio" id="50-54" name="age" value="8">
                                    <label for="50-54">50-54</label><br>
                                    
                                    <br><br> 
</div>

</div>

<div class="tab">
                                    <p>How much funeral cover is needed?</p>
                                    <div class="main">
  
  <div class="slideContainer">
        <div class="test">
       <!-- <input type="range" name="slider1" min="0" max="50000" value="0" step="5000" step="10000" step="5000"  class="slider" id="myRange"> -->
                                    <input type="radio" id="R5000" name="amount" value="R5000">
                                    <label for="R5000">R5000</label><br>
                                    <input type="radio" id="R10000" name="amount" value="R10000">
                                    <label for="R10000">R10000</label><br>  
                                    <input type="radio" id="R15000" name="amount" value="R15000">
                                    <label for="R15000">R15000</label><br>
                                    <input type="radio" id="R20000" name="amount" value="R20000">
                                    <label for="R20000">R20000</label><br>
                                    <input type="radio" id="R25000" name="amount" value="R25000">
                                    <label for="R25000">R25000</label><br>
                                    <input type="radio" id="R30000" name="amount" value="R30000">
                                    <label for="R30000">R30000</label><br>
                                    <input type="radio" id="R40000" name="amount" value="R40000">
                                    <label for="R40000">R40000</label><br>
                                    <input type="radio" id="R50000" name="amount" value="R50000">
                                    <label for="R50000">R50000</label><br>
                                    <input type="radio" id="R60000" name="amount" value="R60000">
                                    <label for="R60000">R60000</label><br>
                                    <input type="radio" id="R70000" name="amount" value="R70000">
                                    <label for="R70000">R70000</label><br><br>
        </div>
        
       <!-- <p>Value: R<span id="value"></span></p> -->
    </div>
</div>
</div>


<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    
    
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>




<div class="modal fade left" id="myModal"> 
<div class="modal-dialog"> 
<div class="modal-content"> 
<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal" title="Close"><span class="glyphicon glyphicon-remove"></span>
</button> 
<h3 class="pull-center no-margin">Contact Form</h3>

 
<div class="modal-body">

</div>
</div>
</div>
</div>
</div>




</div>
</div>
</div>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a href="https://greenbutton.co.za/">
      <img src="images/gb-logo2022-v1-inv-small.png" alt="" width="150" >
      </a>

      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="text-white">© 2023 Green Button. Designed By Thrive Online</a>
  </div>
  <!-- Copyright -->
</footer>



<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    
    document.getElementById("nextBtn").innerHTML = "Calculate";
    
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    
    document.getElementById("regForm").submit();
    
    
    return false;
    
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
  
  if ((document.getElementById('1').checked) && (document.getElementById('single').checked || document.getElementById('family').checked || document.getElementById('single-parent').checked))   {

    var element = document.getElementById("individual-family-single");
    element.style.display = "block";
    document.getElementById("R60000").disabled = true;
    document.getElementById("R70000").disabled = true;
}
else 
{
    var element = document.getElementById("individual-family-single");
    element.style.display = "none";
    
}

if ((document.getElementById('3').checked) && (document.getElementById('single').checked || document.getElementById('family').checked || document.getElementById('single-parent').checked))   {
    var element = document.getElementById("individual-family-single");
    element.style.display = "block";
    document.getElementById("R60000").disabled = true;
    document.getElementById("R70000").disabled = true;


}

if ((document.getElementById('cover-parent').checked))   {

var element = document.getElementById("parent-cover");
element.style.display = "block";
}
else 
{
var element = document.getElementById("parent-cover");
element.style.display = "none";
}

if ((document.getElementById('extend-family').checked))   {

var element = document.getElementById("extended-cover");
element.style.display = "block";
}
else 
{
var element = document.getElementById("extended-cover");
element.style.display = "none";
}

if (document.getElementById('3').checked) {

    document.getElementById("R60000").disabled = false;
    document.getElementById("R70000").disabled = false;
}

if (document.getElementById('1').checked) {

    document.getElementById("R60000").disabled = true;
    document.getElementById("R70000").disabled = true;
}

if (document.getElementById('extend-family').checked) {

    document.getElementById("R40000").disabled = true;
    document.getElementById("R50000").disabled = true;
    document.getElementById("R60000").disabled = true;
    document.getElementById("R70000").disabled = true;
}

if ((document.getElementById('2').checked) &&  (document.getElementById('single').checked || document.getElementById('family').checked || document.getElementById('single-parent').checked))  {

    document.getElementById("R40000").disabled = false;
    document.getElementById("R50000").disabled = false;
    document.getElementById("R60000").disabled = false;
    document.getElementById("R70000").disabled = false;

    var element = document.getElementById("comprehensive-cover");
    element.style.display = "block";
}
else 
{
    var element = document.getElementById("comprehensive-cover");
    element.style.display = "none";
}
if (document.getElementById('cover-parent').checked) {
    
    document.getElementById("R40000").disabled = false;
    document.getElementById("R50000").disabled = false;
    document.getElementById("R60000").disabled = true;
    document.getElementById("R70000").disabled = true;
}




}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  // A loop that checks every input field in the current tab:
  
  if (currentTab == 0 && document.querySelector('input[name="plan"]:checked')) 
  {
    valid = true;
    
  }
  else 
  {
    valid = false;
    
  }

  if (currentTab == 1 && document.querySelector('input[name="cover"]:checked')) 
  {
    valid = true;
  }

  if (currentTab == 2 && document.querySelector('input[name="age"]:checked')) 
  {
    valid = true;
  }

  if (currentTab == 3 && document.querySelector('input[name="amount"]:checked')) 
  {
    valid = true;
  }

  




  console.log(valid);

    
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

<script>

var slider = document.getElementById("myRange");
var output = document.getElementById("value");

output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var start_value = slider.getAttribute("value");

var x = start_value;
</script>
<style>

body {
 background-image: url("");
 background-color: #ffffff;
 background-repeat: no-repeat;
 margin-top: -1%;
 position: relative;
 
}



#regForm {
  margin-top: 6% !important;
  background-color: #ffffff;
  margin: auto;
  padding: 40px;
  width: 100%;
  min-width: 300px;
  height:auto;
  opacity: 95%;
  margin-bottom: 5% !important;
  font-family: 'Montserrat', sans-serif;
  
  
  
}

#regForm input {  
  position: relative;  
  opacity: 0;  
  cursor: pointer;
   
}  

/* Style the input fields */
input {
  padding: 10px;
  opacity: 100% !important;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
 
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
  opacity: 100% !important;
  white-space: wrap;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

h1 {
  align-self: center;
  font-size: 3em;
  font-weight: 900;
  font-family: 'Montserrat', sans-serif;
  text-decoration: underline;
}

p {
	margin-top: 50px;
	opacity: 0.7;
  font-size: 2em;
  font-weight: 900;
  font-family: 'Montserrat', sans-serif;
}

p span {
  color: rgb(117, 252, 117);
}

.slideContainer {
	width: 75%;
	margin-top: 50px;
  align-self: center; 
}
  
  .slider {
	-webkit-appearance: none;
	width: 100%;
	height: 20px;
	
	outline: none;
	opacity: 0.7;
	-webkit-transition: .2s;
	transition: opacity .2s;
	border-radius: 12px;
	box-shadow: 0px 1px 10px 1px black;
	}
  
  .slider:hover {
	opacity: 1;
  }
  
  .slider::-webkit-slider-thumb {
	-webkit-appearance: none;
	appearance: none;
	width: 40px;
	height: 40px;
  background: white;
	cursor: pointer;
	border-radius: 50%;
  }
  
  .slider::-moz-range-thumb {
	width: 40px;
	height: 40px;
	cursor: pointer;
	border-radius: 50%;
  background: white;
  }

  .individual-family-single
  {
    display:none;
  }

  .parent-cover {
    display:none;
  }

  .comprehensive-cover 
  {
    display:none;
  }

  .bg-light {
    --bs-bg-opacity: 1;
    background-color: white !important;
}
.rectangle {
  position: relative;
  height: auto;
  margin: auto;
  width: 70%;
  
  padding: 10px;
  background-color: white;
  margin-bottom: -5%;
  text-align: center;
  vertical-align: middle;
  opacity: 90%;
  margin-top:5%;
}

.rectangleContent {
    position: relative;
    height:auto;
    width:auto;
    font-family: 'Montserrat', sans-serif;

}

.rectangleContent2 {
    position: relative;
    height:auto;
    width:auto;
    font-family: 'Montserrat', sans-serif;
}

.bg-dark {
    --bs-bg-opacity: 1;
    background-color: #333333 !important;
}
.rectangleContentGreen {
  color: green !important;
  font-size: 30px;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

		
	
		

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/progress.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="jquery.js"></script>          
<script type="text/javascript">
                                         
    $(document).ready( function() { 
        $('#some_id').load('php-file.php'); 
    }); 
</script> 
	

    

  	<!-- SLIDER REV -->
	<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
   /* ==============================================
	SLIDER -->
	=============================================== */   
	jQuery('.tp-banner').show().revolution(
	{
	dottedOverlay:"none",
	delay:16000,
	startwidth:1170,
	startheight:665,
	hideThumbs:200,     
	thumbWidth:100,
	thumbHeight:50,
	thumbAmount:5,  
	navigationType:"none",
	navigationArrows:"solo",
	navigationStyle:"preview3",  
	touchenabled:"on",
	onHoverStop:"on",
	swipe_velocity: 0.7,
	swipe_min_touches: 1,
	swipe_max_touches: 1,
	drag_block_vertical: false,          
	parallax:"mouse",
	parallaxBgFreeze:"on",
	parallaxLevels:[7,4,3,2,5,4,3,2,1,0],            
	keyboardNavigation:"off",   
	navigationHAlign:"center",
	navigationVAlign:"bottom",
	navigationHOffset:0,
	navigationVOffset:20,
	soloArrowLeftHalign:"left",
	soloArrowLeftValign:"center",
	soloArrowLeftHOffset:20,
	soloArrowLeftVOffset:0,
	soloArrowRightHalign:"right",
	soloArrowRightValign:"center",
	soloArrowRightHOffset:20,
	soloArrowRightVOffset:0,  
	shadow:0,
	fullWidth:"on",
	fullScreen:"off",
	spinner:"spinner4",  
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",  
	autoHeight:"off",           
	forceFullWidth:"off",                         
	hideThumbsOnMobile:"off",
	hideNavDelayOnMobile:1500,            
	hideBulletsOnMobile:"off",
	hideArrowsOnMobile:"off",
	hideThumbsUnderResolution:0,
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	startWithSlide:0
	});   
	</script>

</body>
</html>