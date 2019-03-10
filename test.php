<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>

  <title>Bootstrap Example</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <style type="text/css">

  body{
    background-image: url("img2.jpg");
  }
    
 #fac_reg{
  padding: 50px;
  
  margin-top: 100px;
  margin-bottom: 100px;

 }

 h2{
  background-color: white;
 }
  

label{
font-weight:bold; 

}
input[type=radio]{
margin-right: 20px;
}


  </style>



</head>

<body>

​

<div class="container">

<div class="card" id="fac_reg">

  <h2 class="text-center"> FEEDBACK FORM </h2>

  <br>
  <br>

  <form action="studentfeeddb.php" method="post">

<br>

 <div class="form-group">
      <div class="row">
      <br> 
        <div class="col-md-8">

      <label for="email"> How was your College 1rastructure?</label>
      <br>
    <input type="radio" name="1" value="20"> Bad<br>
  <input type="radio" name="1" value="40"> Good<br>
  <input type="radio" name="1" value="80"> Very Good<br>  
  <input type="radio" name="1" value="100"> Excellent<br> 


    </div>

       <br> 
        <div class="col-md-8">

      <label for="email"> How they conduct Extra-curricular Activities ?</label>
      <br>
    <input type="radio" name="2" value="20"> Bad<br>
  <input type="radio" name="2" value="40"> Good<br>
  <input type="radio" name="2" value="80"> Very Good<br>  
  <input type="radio" name="2" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How they conduct Soft Skill classes?</label>
      <br>
    <input type="radio" name="3" value="20"> Bad<br>
  <input type="radio" name="3" value="40"> Good<br>
  <input type="radio" name="3" value="80"> Very Good<br>  
  <input type="radio" name="3" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How they provide Hostel facilities?</label>
      <br>
    <input type="radio" name="4" value="20"> Bad<br>
  <input type="radio" name="4" value="40"> Good<br>
  <input type="radio" name="4" value="80"> Very Good<br>  
  <input type="radio" name="4" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How they provide water facilities? </label>
      <br>
    <input type="radio" name="5" value="20"> Bad<br>
  <input type="radio" name="5" value="40"> Good<br>
  <input type="radio" name="5" value="80"> Very Good<br>  
  <input type="radio" name="5" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">Do they provide best placements?</label>
      <br>
    <input type="radio" name="6" value="20"> Bad<br>
  <input type="radio" name="6" value="40"> Good<br>
  <input type="radio" name="6" value="80"> Very Good<br>  
  <input type="radio" name="6" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How they follow their Dress Code?></label>
      <br>
    <input type="radio" name="7" value="20"> Bad<br>
  <input type="radio" name="7" value="40"> Good<br>
  <input type="radio" name="7" value="80"> Very Good<br>  
  <input type="radio" name="7" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">what are the Medical facilities they provide?</label>
      <br>
    <input type="radio" name="8" value="20"> Bad<br>
  <input type="radio" name="8" value="40"> Good<br>
  <input type="radio" name="8" value="80"> Very Good<br>  
  <input type="radio" name="8" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How they conduct Daily test in a class?</label>
      <br>
    <input type="radio" name="9" value="20"> Bad<br>
  <input type="radio" name="9" value="40"> Good<br>
  <input type="radio" name="9" value="80"> Very Good<br>  
  <input type="radio" name="9" value="100"> Excellent<br> 


    </div>
	  
	  <br>
	  <div class="col-md-8">

      <label for="email">How they conduct parent teacher meeting?</label>
      <br>
    <input type="radio" name="10" value="20"> Bad<br>
  <input type="radio" name="10" value="40"> Good<br>
  <input type="radio" name="10" value="80"> Very Good<br>  
  <input type="radio" name="10" value="100"> Excellent<br> 


    </div>
	<br>
	  <div class="col-md-8">

      <label for="email">What lab facilities they provide?</label>
      <br>
    <input type="radio" name="11" value="20"> Bad<br>
  <input type="radio" name="11" value="40"> Good<br>
  <input type="radio" name="11" value="80"> Very Good<br>  
  <input type="radio" name="11" value="100"> Excellent<br> 


    </div>
	<br>
	  <div class="col-md-8">

      <label for="email">How the staff Interacts with you?</label>
      <br>
    <input type="radio" name="12" value="20"> Bad<br>
  <input type="radio" name="12" value="40"> Good<br>
  <input type="radio" name="12" value="80"> Very Good<br>  
  <input type="radio" name="12" value="100"> Excellent<br> 


    </div>
	<br>
	  <div class="col-md-8">

      <label for="email">How they conduct alumni meet?</label>
      <br>
    <input type="radio" name="13" value="20"> Bad<br>
  <input type="radio" name="13" value="40"> Good<br>
  <input type="radio" name="13" value="80"> Very Good<br>  
  <input type="radio" name="13" value="100"> Excellent<br> 


    </div>
	<br>
	  <div class="col-md-8">

      <label for="email">Do they provide all canteen facilities?</label>
      <br>
    <input type="radio" name="14" value="20"> Bad<br>
  <input type="radio" name="14" value="40"> Good<br>
  <input type="radio" name="14" value="80"> Very Good<br>  
  <input type="radio" name="14" value="100"> Excellent<br> 


    </div>
	
   

 
  </div>
</div>

<br>

<br>

 <div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-6">
   <input type="submit" value="submit" class="btn btn-primary text-center">

 </div>


</div>

  </form>
</div>
</div>
</body>
</html>

