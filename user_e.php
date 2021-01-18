<?php include 'header.php'; ?>
<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT * FROM `User`";
$read = $mysqli->query($query);

?>

<div class="container-fluid">
  <div class="banner">
    <img src="images/banner.jpg">
  </div>
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
            <th><?php echo $row['id']; ?></th>
            <th><?php echo $row['name']; ?></th>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['tel']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
            <td><a role="button" href="user_e.php?posts=<?php echo  $row['id'] ;  ?> " class="btn btn-primary"  >Details</a></td>

         

          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<?php 
 if(isset($_GET['posts'])){

	$id=$_GET['posts'];
}
echo "<h1> $id </h1>"

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php 
 if(isset($_GET['posts'])){

	$id=$_GET['posts'];
}
echo "<h1> $id </h1>"

?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>