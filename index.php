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
          <th>Age</th>
          <th>Text</th>
          <th>image</th>
          <th>details</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $read->fetch_assoc()) { ?>
          <?php if(isset($_GET['posts'])){ ?>
            <form>
            <tr class="table-active">
              <th><?php echo $row['id']; ?></th>
              <th></th>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['text_user']; ?></td>
              <td class="w-25 ">  <img src="uploads/<?php echo  $row['images'] ."\" height=\"130\" width=\"150\> "; ?>">  </td>
              <td><a href="index.php?posts=<?php echo  $row['id'];  ?>">Details</a></td>
            </tr>
            </form>
          <?php } else {?>
            <tr class="table-active">
              <th><?php echo $row['id']; ?></th>
              <th><?php echo $row['name']; ?></th>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['text_user']; ?></td>
              <td class="w-25 ">  <img src="uploads/<?php echo  $row['images'] ."\" height=\"130\" width=\"150\> "; ?>">  </td>
              <td><a href="index.php?posts=<?php echo  $row['id'];  ?>">Details</a></td>
            </tr>
          <?php } ?>
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

<?php include 'footer.php'; ?>