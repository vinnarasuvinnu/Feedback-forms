


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
    
 #stu_reg{
  padding: 50px;
  background-image: url("img1.jpeg");
  margin-top: 100px;
  margin-bottom: 100px;

 }
   span{
  background-color: white;
 }

label{
font-weight:bold; 
}
  </style>


</head>

<body>

​

<div class="container">

<div class="card" id="stu_reg">

  <h2 class="text-center"> <span>STUDENT REGISTRATION FORM </span></h2>

  <br>
  <br>

  <form action="studentdb.php" method="post">

<br>

 <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="email">Name:</label>
    </div>
    <div class="col-md-8">


      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
  </div>

    </div>

     <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="rollno">Roll No:</label>
    </div>
    <div class="col-md-8">


      <input type="text" class="form-control" id="rollno" placeholder="Enter roll number" name="rollno">
    </div>
  </div>

    </div>

    <div class="form-group">

      <div class="row"> 
        <div class="col-md-4">

      <label for="batch">Batch:</label>
    </div>
    <div class="col-md-8">


      <input type="text" class="form-control" id="batch" placeholder="Enter batch" name="batch">
    </div>
  </div>

    </div>




     <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="department">Department:</label>
    </div>
    <div class="col-md-8">
        <select name="department" class="form-control">
          <option>Computer Science</option>
          <option>Chemistry</option>
          <option>Physics</option>
          <option>Biology</option>
          <option>Maths</option>
          <option>Commerce</option>
        </select>

     
    </div>
  </div>

    </div>


    <div class="form-group">

      <div class="row"> 
        <div class="col-md-4">

      <label for="mobile">Mobile:</label>
    </div>
    <div class="col-md-8">


      <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
  </div>

    </div>

<div class="form-group">

      <div class="row"> 
        <div class="col-md-4">

      <label for="mail">Email:</label>
    </div>
    <div class="col-md-8">


      <input type="email" class="form-control" id="email" placeholder="Enter Mail" name="mail">
    </div>
  </div>

    </div>

    <div class="form-group">

      <div class="row"> 
        <div class="col-md-4">

      <label for="course">Course:</label>
    </div>
    <div class="col-md-8">


      <input type="text" class="form-control" id="text" placeholder="Enter course" name="course">
    </div>
  </div>

    </div>


    <div class="form-group">
      <div class="row"> 
        <div class="col-md-4">

      <label for="Shift">Shift:</label>
    </div>
    <div class="col-md-8">
        <select name="shift" class="form-control">
          <option>Morning Shift</option>
          <option>Afternoon Shift</option>
          
        </select>

     
    </div>
  </div>

    </div>

<div class="form-group">

      <div class="row"> 
        <div class="col-md-4">

      <label for="password">Password:</label>
    </div>
    <div class="col-md-8">


      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
  </div>

    </div>

    <br>
    <br>
 
<div class="row" >
  <div class="col-md-3">
   <input type="submit" value="Submit" class="btn btn-primary">
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
  <br>
  <br>

</div>
<br>

<div class="row">
<p>if you have account login from here ? <a href="index.php">login form </a></p>
  </div>

  </form>
</div>
</div>
</body>
</html>

