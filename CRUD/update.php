<?php

include 'connect.php';
$id=$_GET['updateid'];
$query="Select * from crud where id=$id";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    // $sql="insert into 'crud'(name,email,mobile,password)
    // values('$name','$email','$mobile','$password')";
    $query = "update crud set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        // echo " updated  successfully";
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
                 placeholder="Enter your Name" name="name"autocomplete ="off" value=<?php echo $name;?>>
             </div>
             <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control"
                 placeholder="Enter your Email" name="email"autocomplete ="off" value=<?php echo $email;?>>
             </div>
             <div class="form-group">
                 <label>mobile Number</label>
                 <input type="text" class="form-control"
                 placeholder="Enter your mobile number" name="mobile"autocomplete ="off" value=<?php echo $mobile;?>>
             </div>
             <div class="form-group">
                 <label>Password</label>
                 <input type="text" class="form-control"
                 placeholder="Enter your Password" name="password"autocomplete ="off" value=<?php echo $password;?>>
             </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
     </form>
 </div>
   
</body>
</html>