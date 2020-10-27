<div class="col-sm-6" style="margin: 0 auto;">
  <form action="" method="post">

    <div class="form-group">
      <label for="name">Name</label>
      <input type= "text" class= "form-control" name="name"  placeholder= "Enter your full name here" value="<?php echo empty($_POST['name']) ? '' :''; ?>"><br>
      <?php echo $errorhandling; ?>
    </div></br>
    <div class="form-group">
      <label for="username">Username</label>
      <input type= "text" class= "form-control" name="username"  placeholder= "Enter your username here" value="<?php echo empty($_POST['username']) ? '' :($_POST['username']) ?>">
    </div></br></br>
    <div class="form-group">
      <label for="email">Email</label>
      <input type= "text" class= "form-control" name="email"  placeholder= "Enter your email here" value="<?php echo empty($_POST['email']) ? '' :($_POST['email']) ?>">
    </div></br></br>
    <div class="form-group">
      <label for="password">Password</label>
      <input type= "password" class= "form-control" name="password"  placeholder= "Enter your password here" value="<?php echo empty($_POST['password']) ? '' :($_POST['password']) ?>">
    </div></br></br>
    <div class="form-group">
      <label for="confirm_password">Confirm Password</label>
      <input type= "password" class= "form-control" name="confirm_password"  placeholder= "confirm password" value="<?php echo empty($_POST['confirm_password']) ? '' :($_POST['confirm_password']) ?>">
    </div></br>
    <div class="form-group"; style="text-align:center;">
    <label for="qualification">Qualification</label></br>
    <label for="BCA" class="checklabel">BCA  <input type="checkbox" class= "form-control" name="ch[]"  value="BCA"></label>
    <label for="MCA" class="checklabel">MCA  <input type="checkbox" class="form-control" name="ch[]"   value="MCA"></label>
    <label for="M.SC" class="checklabel">M.SC<input type="checkbox" class= "form-control" name="ch[]"  value="M.SC"></label>
  </div>  
    <div class="col-sm-2" style="margin: 0 auto;">
      <button type= "submit" class= "btn btn-primary" name="submit"   value="submit">SUBMIT</button>
    </div>
    
  </form>
</div>