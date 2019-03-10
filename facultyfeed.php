


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

  <form action="facultyfeeddb.php" method="post">

<br>

 <div class="form-group">
      <div class="row">
      <br> 
        <div class="col-md-8">

      <label for="email">What is your college status ?</label>
      <br>
    <input type="radio" name="1" value="20"> Bad<br>
  <input type="radio" name="1" value="40"> Good<br>
  <input type="radio" name="1" value="80"> Very Good<br>  
  <input type="radio" name="1" value="100"> Excellent<br> 


    </div>

       <br> 
        <div class="col-md-8">

      <label for="email">How students performed?</label>
      <br>
    <input type="radio" name="2" value="20"> Bad<br>
  <input type="radio" name="2" value="40"> Good<br>
  <input type="radio" name="2" value="80"> Very Good<br>  
  <input type="radio" name="2" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">What is status of current year result in your class?</label>
      <br>
    <input type="radio" name="3" value="20"> Bad<br>
  <input type="radio" name="3" value="40"> Good<br>
  <input type="radio" name="3" value="80"> Very Good<br>  
  <input type="radio" name="3" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How are the students in discipline?</label>
      <br>
    <input type="radio" name="4" value="20"> Bad<br>
  <input type="radio" name="4" value="40"> Good<br>
  <input type="radio" name="4" value="80"> Very Good<br>  
  <input type="radio" name="4" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How the college provide transport facilities to faculties?</label>
      <br>
    <input type="radio" name="5" value="20"> Bad<br>
  <input type="radio" name="5" value="40"> Good<br>
  <input type="radio" name="5" value="80"> Very Good<br>  
  <input type="radio" name="5" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">Do they provide all canteen facilities?</label>
      <br>
    <input type="radio" name="6" value="20"> Bad<br>
  <input type="radio" name="6" value="40"> Good<br>
  <input type="radio" name="6" value="80"> Very Good<br>  
  <input type="radio" name="6" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">Do the higher staff interact good with other staffs?</label>
      <br>
    <input type="radio" name="7" value="20"> Bad<br>
  <input type="radio" name="7" value="40"> Good<br>
  <input type="radio" name="7" value="80"> Very Good<br>  
  <input type="radio" name="7" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">How did you gave percentage in your subjects?</label>
      <br>
    <input type="radio" name="8" value="20"> Bad<br>
  <input type="radio" name="8" value="40"> Good<br>
  <input type="radio" name="8" value="80"> Very Good<br>  
  <input type="radio" name="8" value="100"> Excellent<br> 


    </div>
       <br> 
        <div class="col-md-8">

      <label for="email">staff welfare?</label>
      <br>
    <input type="radio" name="9" value="20"> Bad<br>
  <input type="radio" name="9" value="40"> Good<br>
  <input type="radio" name="9" value="80"> Very Good<br>  
  <input type="radio" name="9" value="100"> Excellent<br> 


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

