


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
    
 #login{
  padding: 50px;
  background-image: url("back2.jpg");
  margin-top: 100px;
  margin-bottom: 100px;

 }

 #final{
  margin-bottom: 100px;
 }

 span{
 }

 h2{
   margin-top: 100px;
 }
  

label{
font-weight:bold; 
}
  </style>

</head>

<body>

​<div class="container">

  <div class="row">

    <div class="col-md-8">

<div class="card" id="login">

  <h2 class="text-center"> <span>LOGIN FORM </span></h2>

  <form action="logindb.php" method="post">

    <br>

   <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="userid">User Id / Rollno:</label>
    </div>
    <div class="col-md-8">


      <input type="text" class="form-control" id="userid" placeholder="Enter userid" name="userid">
    </div>
  </div>

    </div>



   <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="pass">Password:</label>
    </div>
    <div class="col-md-8">


      <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass">
    </div>
  </div>

    </div>

     

    



     <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="type">Type:</label>
    </div>
    <div class="col-md-8">
        <select name="type" class="form-control">
          <option value="student">Student</option>
          <option value="faculty">Faculty</option>
          
        </select>

     
    </div>
  </div>

    </div>

    <div class="row" id="final">
  <div class="col-md-3">
   <input type="submit" value="Login" class="btn btn-primary">
 </div>
  <div class="col-md-3">
   <input type="submit" value="Exit" class="btn btn-primary">
 </div>
 <div class="col-md-3">
   <input type="submit" value="Clear" class="btn btn-primary">
 </div>
 <div class="col-md-3">
   <input type="submit" value="Modify" class="btn btn-primary">
 </div>


</div>

<div class="row">
  <p>if you dont have account as as student ? <a href="student_register.php">student register</a></p>
  <p>if you dont have account as a faculty ? <a href="faculty_register.php">faculty register</a></p>
  </div>
 

   
  </form>

</div>

​</div>

</div>

</div>

</body>

</html>

​

