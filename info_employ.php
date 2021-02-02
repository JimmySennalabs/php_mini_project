<?php include 'header.php'; ?>
<pre><?php print_r($_POST) ?> </pre>


<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();

}

$query = "SELECT * FROM `employ` WHERE role = 'employee' LIMIT 0, 25";
$read = $mysqli->query($query);

if (isset($_POST['submit'])) {

  $id = $_POST['id'];
  $e_name = $_POST['e_name'];
  $e_lastname = $_POST['e_lastname'];
  $e_tel = $_POST['e_tel'];
  $e_address = $_POST['e_address'];

  $query = "";
  $update = $mysqli->query($query);
}

?>

<script>
    console.log(<?= json_encode(""); ?>);
</script>

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
          <?php if(isset($_GET['posts'])){ ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="update">
            <tr class="table-active">
            <th class="w-6">
              <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </th>
            <th>
              <input type="text" class="form-control" name="e_name" value="<?php echo $row['e_name']; ?>">
            </th>
            <td>
              <input type="text" class="form-control" name="e_lastname" value="<?php echo $row['e_lastname']; ?>">
            </td>
            <td>
              <input type="text" class="form-control" name="e_tel" value="<?php echo $row['e_tel']; ?>">
            </td>
            <td>
              <input type="text" class="form-control" name="e_address" value="<?php echo $row['e_address']; ?>">
            </td>
            <td>              
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </td>
            </tr>
            </form>
          <?php } else {?>
              <tr class="table-active">
              <th><?php echo $row['id']; ?></th>
              <th><?php echo $row['e_name']; ?></th>
              <td><?php echo $row['e_lastname']; ?></td>
              <td><?php echo $row['e_tel']; ?></td>
              <td><?php echo $row['e_address']; ?></td>
              <td><a href="info_employ.php?posts=<?php echo  $row['id'];  ?>">Edit</a></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'footer.php'; ?>