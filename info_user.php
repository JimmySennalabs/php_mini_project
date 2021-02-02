<?php include 'header.php'; ?>
<pre><?php print_r($_POST) ?> </pre>

<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT * FROM `User`";
$read = $mysqli->query($query);

if (isset($_POST['submit'])) {
  
  $id = $_POST['id'];
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $tel = $_POST['tel'];
  $address = $_POST['address'];

  $query = "UPDATE `user` SET `name`= '$name',`lastname`='$lastname',`tel`= '$tel',`address`= '$address' WHERE id = '$id'";
  $update = $mysqli->query($query);
}

?>

<div class="container-fluid">
  
  <div class="container">
    <h2>User </h2>
    <hr>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>LastName</th>
          <th>Tel</th>
          <th>Address</th>
          <th>Edit</th>
         
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $read->fetch_assoc()) { ?>
          <tr class="table-active">
          
          </tr>

          <?php if(isset($_GET['posts'])){ ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="update">
            <tr class="table-active">
            <th class="w-6">
              <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </th>
            <th>
              <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </th>
            <td>
              <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
            </td>
            <td>
              <input type="text" class="form-control" name="tel" value="<?php echo $row['tel']; ?>">
            </td>
            <td>
              <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
            </td>
            <td>              
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </td>
            </tr>
            </form>
            
          <?php } else {?>
              <tr class="table-active">
              <th><?php echo $row['id']; ?></th>
              <th><?php echo $row['name']; ?></th>
              <td><?php echo $row['lastname']; ?></td>
              <td><?php echo $row['tel']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><a href="info_user.php?posts=<?php echo  $row['id'];  ?>">Edit</a></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'footer.php'; ?>