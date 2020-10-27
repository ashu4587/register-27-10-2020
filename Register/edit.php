<?php
  include './connection.php';
  if(isset($_POST['update'])){
    $sql = "UPDATE `".TABLE."` SET `name`='".$_POST['name']."' , `username`='".$_POST['username']."' ,`email`='".$_POST['email']."',`qualification`='".implode(',',$_POST['ch'])."' WHERE `id`=".$_GET['id'];  
    $update = mysqli_query($mysqli, $sql);
    if($update == false){
      echo "Update Error";
    }else{
      echo "Data Updated";
    }
  }
  //echo $_GET['id'];
  $record  = mysqli_query($mysqli, "SELECT * FROM `".TABLE."` WHERE `id` = ".$_GET['id']);
  $rcrd    = mysqli_fetch_assoc($record);
  
  $quali = explode("," , $rcrd['qualification']);
    
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
  <label for="qualification">Qualification</label>
  <label for="BCA">BCA</label>
  <input type= "checkbox" class= "form-control" name="ch[]"   value="BCA" <?php echo ( $quali[0] == 'BCA' ) ? 'checked="checked"' : ''; ?> >
  <label for="MCA">MCA</label>
  <input type= "checkbox" class= "form-control" name="ch[]"   value="MCA" <?php echo ( $quali[1] == 'MCA' ) ? 'checked="checked"' : ''; ?> >
  <label for="M.SC">M.SC</label>
  <input type= "checkbox" class= "form-control" name="ch[]"   value="M.SC" <?php echo ( $quali[2] == 'M.SC' ) ? 'checked="checked"' : ''; ?> >
</div>
<div class="">
  <button type="submit" class= "btn btn-primary" name="update" value="submit">UPDATE</button>
</div>

</form>