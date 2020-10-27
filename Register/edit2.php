<?php
  include './connection.php';
  $sql = " UPDATE  `".TABLE."` SET `name`='".$_POST['name']."' , `username`='".$_POST['username']."' ,`email`='".$_POST['email']."' ,`password`='".$_POST['password']."'  ,`qualification`='".implode(',',$_POST['ch'])."' WHERE `id`=".$_GET['id'];  
    $update = mysqli_query($mysqli, $sql);
    if($update === false){
      echo "Update Error";
    }else{
      echo "Data Updated";
    }   
    $record  = mysqli_query($mysqli, "SELECT * FROM `".TABLE."` WHERE `id` = ".$_GET['id']);
  $rcrd    = mysqli_fetch_assoc($record);


  $qualifi = explode(",",$rcrd['qualification']);


?>
<form action="" method="post">

<div class="form-group">
  <label for="name">Name</label>
  <input type= "text" class= "form-control" name="name"  placeholder= "Enter your full name here" value="<?php echo $rcrd ['name']; ?>">
</div>
<div class="form-group">
  <label for="username">Username</label>
  <input type= "text" class= "form-control" name="username"  placeholder= "Enter your username here" value="<?php echo $rcrd ['username']; ?>">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type= "text" class= "form-control" name="email"  placeholder= "Enter your email here" value="<?php echo $rcrd ['email']; ?>">
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type= "password" class= "form-control" name="password"  placeholder= "Enter your password here" value="<?php echo $rcrd ['password']; ?>">
</div>
<div class="form-group">
  <label for="confirm_password">Confirm Password</label>
  <input type= "password" class= "form-control" name="confirm_password"  placeholder= "confirm password" value="<?php echo $rcrd ['confirm_password']; ?>">
</div>
<div class="form-group">
  <label for="qualification">Qualification</label>
  <label for="BCA">BCA</label>
  <input type= "checkbox" class= "form-control" name="ch[]" <?php echo ( $qualifi[0] == 'MCA') ? 'checked="checked"' : ''; ?>  value="BCA">
  <label for="MCA">MCA</label>
  <input type= "checkbox" class= "form-control" name="ch[]"   value="MCA">
  <label for="M.SC">M.SC</label>
  <input type= "checkbox" class= "form-control" name="ch[]"   value="M.SC">
</div>
<div class="">
  <button type= "submit" class= "btn btn-primary" name="submit"   value="submit">SUBMIT</button>
</div>

</form>