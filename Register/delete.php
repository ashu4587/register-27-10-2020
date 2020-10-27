<?php
 
  include './connection.php';
  if(isset($_GET['task'] )&& $_GET['task'] == 'delete'){
    $delete = 'DELETE FROM `'.TABLE.'` WHERE `id` ='.$_GET['id'] ;
    $records  = mysqli_query($mysqli, $delete);

    //print_r($records);
    //die();
    if($records){
      echo "Record Delete successfully";
    }else{
      echo "Delete Error";
    }
  }
  
  if(isset($_POST['bulkAction'] )&& $_POST['bulkAction'] == 'deleted'){

    if( empty( $_POST['users'] ) ){
      return;
    }

    $users = $_POST['users'];
    foreach ($users as $ids) {
      $records  = mysqli_query($mysqli, 'DELETE FROM `'.TABLE.'` WHERE `id` ='.$ids );
      if($records === false){
        return "Multi delete Error";
      }      
    }
    echo "records deleted";
  }
