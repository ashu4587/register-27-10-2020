<?php
  include './connection.php';
  $errorhandling= "";
  if(isset($_POST['submit'])){
    $passsword = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $validation= "valid";
    if ($passsword == $cpassword){
      if (empty($_POST['name'])){
        $errorhandling = "Name is required ";
        $validation = "invalid";
      }else{
      $sql = "INSERT INTO `".TABLE."` (`name`, `username`, `email`, `password`, `confirm_password`, `qualification`) VALUES ('".$_POST['name']."', '".$_POST['username']."', '".$_POST['email']."','".$passsword."', '".$cpassword ."', '".implode(',',$_POST['ch'])."')";
      $insert = mysqli_query($mysqli, $sql);
        //var_dump($insert);
        // if($insert === true){
      echo "Data inserted Successfully";
        }
    }else{
      echo "Password did not Match, Try";
    }
  }
  //echo $errorhandling
?>
<?php 
  include './html/head.php';
  include './html/form.php';
  include './html/footer.php';
?>