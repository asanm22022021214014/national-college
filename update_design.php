<?php
$id =  $_GET['id'];
$query = "SELECT * FROM kanna WHERE id = '$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>collage</title>
</head>

<body>
      <div class="container">
          <form action="" method="POST">
        <div class="title">
            Update Student Details
        </div>
        <div class="form">
           <div class="input_file">
                 <lable>First Name</lable>
                 <input type="text" value="<?php echo $result['fname'];?>" class="input"  name="fname" required>
            </div>

            <div class="input_file">
                 <lable>Last Name</lable>
                 <input type="text" value="<?php echo $result['lname'];?>" class="input"  name="lname" required>
            </div>
            
            <div class="input_file">
                 <lable>Password</lable>
                 <input type="password" value="<?php echo $result['password'];?>" class="input"  name="password" required></input>
            </div>
           
            <div class="input_file">
                 <lable>Confirom Password</lable>
                 <input type="password" value="<?php echo $result['conpassword'];?>" class="input"  name="conpassword" required>
            </div>

            <div class="input_file">
                 <lable>Gender</lable>
                 <div class="custom_select" >

                 <select name="gender" required>
                    <option value="selected">Select</option>
                    
                    <option value="male"
                        <?php
                             if($result['gender'] == 'male')
                             {
                                echo "selected";
                             }
                        ?>
                        
                        >Male </option>

                    <option value="female"
                    <?php
                             if($result['gender'] == 'female')
                             {
                                echo "selected";
                             }
                        ?>
                    
                    >Female</option>
                 </select>
                 </div>
            </div>

            <div class="input_file">
                 <lable>Email</lable>
                 <input type="text" value="<?php echo $result['email'];?>" class="input"  name="email" required>
            </div>

            <div class="input_file">
                 <lable>Phone Number</lable>
                 <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
            </div>
             
            <div class="input_file">
                 <lable>Address</lable>
                <textarea class="textarea"  name="address" required> <?php echo $result['address'];?> </textarea>
            </div>
                    
            <div class="input_file trems">
                 <lable class="check">
                    <input type="checkbox" required></input>
                    <span class="checkmark"></span>
                 </lable>
                <p>Agree to trems and conditions</p>
            </div>
            <div class="input_file">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>   
      </div>
</form>
</body>

</html>

<?php 
   if($_POST['update'])
   {
     $fname     = $_POST['fname'];
     $lname     = $_POST['lname'];
     $pwd       = $_POST['password'];
     $cpwd      = $_POST['conpassword'];
     $gender    = $_POST['gender'];
     $email     = $_POST['email'];
     $phone     = $_POST['phone'];
     $address   = $_POST['address'];

     $query = "UPDATE kanna set fname='$fname',lname='$lname',password='$password',conpassword=
     '$conpassword',gender='$gender',email='$email',phone='$phone',address='$address' WHERE id='$id'";
     $data = mysqli_query($conn,$query);
      
     if($data)
     {
        echo "record update";
        ?>
         <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.html"/>

        <?php

     }
     else
     {
       echo "not update";
     }
  }
?>


