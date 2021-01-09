<?php include 'header.php' ?>
<!-- <pre><?php print_r($_POST) ?> </pre> -->
<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $age = $_POST['age'];
  $text_user = $_POST['text_user'];
 
  $target_dir="uploads/";
	$target_file= $target_dir . basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
  $query="INSERT INTO `User` (`id`, `name`, `age`, `text_user`, `images`) VALUES (null, '$name', '$age', '$text_user', '$temp_file')";    
  $insert=$mysqli->query($query);

}
?>
<div class="container">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <legend>Add a something</legend>
    <hr>
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label>age</label>
      <input type="text" name="age" class="form-control" placeholder="Enter age">
    </div>
    <div class="form-group">
      <label> textarea</label>
      <textarea class="form-control" name="text_user" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Featured Image</label>
      <div class="col-lg-10">
        <input type="file" name="images">
      </div>
    </div>
    <button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'footer.php' ?>