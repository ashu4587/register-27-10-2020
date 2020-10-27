<?php
 
 include './delete.php';
  
  $queryParam = "";
  if( !empty($_GET['search']) ){
    $search = $_GET['search'];
    $queryParam = " WHERE `name` LIKE '%{$search}%' ";
  }

  $sql = "
    SELECT 
    * 
    FROM 
      `".TABLE."`
      {$queryParam}
    ORDER BY 
      `id` 
    DESC
  ";

  //echo $sql;
  $table = mysqli_query($mysqli, $sql);
  $fetch = mysqli_fetch_all($table, MYSQLI_ASSOC);
//  echo "<pre>";
//   print_r($table);
// echo"</pre>";
//  die();
?>

<form method="get">
  <div class="searchContainer">
    <input type="text" name="search" placeholder="Search...." />
    <!-- <input type="submit" name = "searchButton" value="Go"> -->
    <button type="submit" name = "searchButton" >Go</button>
  </div>
</form>
<form method="post">
    <!-- <div class="search">
      <input type="text" name="search" placeholder="Search....">
      <button type="submit"></button>
    </div>
    <div> -->
      <select name="bulkAction">
        <option value="">SELECT</option>
        <option value="deleted">Delete</option>
      </select>
      <button type="submit" name="bulk">Action</button>
    </div>
  <style>
  table, th, td {
    border: 1px solid black;
    background-color:pink;
  }
  </style>
  <table>
    <thead>
      <tr>
        <th> <input type="checkbox"> </th>
        <th> ID </th>
        <th> Name </th>
        <th> Username </th>
        <th> Email </th>
        <th> Qualification </th>
        <th> Action </th>
    </tr>
    </thead>
    <tbody>
      <?php foreach($fetch as $key => $value) { 
        // var_dump($value);
        // die();
      ?>
        <tr>
        <td><input type="checkbox" name="users[]" value="<?php echo $value['id'];?>"></td>
          <td><?php echo $value['id']; ?></td>
          <td><?php echo $value['name']; ?></td>
          <td><?php echo $value['username']; ?></td>
          <td><?php echo $value['email']; ?></td>
          <td><?php echo $value['qualification']; ?></td>
          <td><a href= "edit.php?id= <?php echo $value ['id']; ?>">Edit </a>
          <a href="fetch.php?id=<?php echo $value['id']; ?>&task=delete">Delete</a> 
        </tr> 
      <?php 
        } 
      //} 
      ?>
      
    </tbody>
  </table>
</form>