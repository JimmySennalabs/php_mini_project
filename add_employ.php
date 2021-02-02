<?php include 'header.php' ?>
<pre><?php print_r($_POST) ?> </pre>

<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

if (isset($_POST['submit'])) {

  $e_name = $_POST['e_name'];
  $e_lastname = $_POST['e_lastname'];
  $e_tel = $_POST['e_tel'];
  $e_address = $_POST['e_address'];
  $line = $_POST['line'];
  $role = $_POST['role'];

  $query = "INSERT INTO `employ`(`id`, `role`, `e_name`, `e_lastname`, `e_tel`, `e_address`, `line`) VALUES (null,'$role','$e_name','$e_lastname','$e_tel','$e_address','$line')";
  $insert = $mysqli->query($query);
}
?>
<div class="container">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <legend>add employee</legend>
    <div class="form-group">
    <label>role</label>
    <select  name="role" >
      <option value="owner">owner</option>
      <option value="employee"> employee</option>
    </select>
    </div>

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="e_name" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label>LastName</label>
      <input type="text" class="form-control" name="e_lastname" placeholder="Enter LastName">
    </div>

    <div class="form-group">
      <label>Tel</label>
      <input type="number" class="form-control" name="e_tel" placeholder="Enter Tel">
    </div>

    <div class="form-group">
      <label>address</label>
      <textarea class="form-control" name="e_address" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label>line</label>
      <input type="text" class="form-control" name="line" placeholder="Enter line">
    </div>
    <button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'footer.php' ?>
