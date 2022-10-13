<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    // $sql="insert into 'crud'(name,email,mobile,password)
    // values('$name','$email','$mobile','$password')";
    $query = "INSERT INTO crud (name,email,mobile,password) VALUES ('$name', '$email','$mobile','$password')";
    $result=mysqli_query($con,$query);
    if($result){
        // echo "data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
             <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control"
                 placeholder="Enter your Name" name="name"autocomplete ="off">
             </div>
             <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control"
                 placeholder="Enter your Email" name="email"autocomplete ="off">
             </div>
             <div class="form-group">
                 <label>mobile Number</label>
                 <input type="text" class="form-control"
                 placeholder="Enter your mobile number" name="mobile"autocomplete ="off">
             </div>
             <div class="form-group">
                 <label>Password</label>
                 <input type="text" class="form-control"
                 placeholder="Enter your Password" name="password"autocomplete ="off">
             </div>
            
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
     </form>
 </div>
   
</body>
</html>