<?php include 'header.php'; ?>

<?php

$mysqli=new mysqli('127.0.0.1','root','','testphp');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_GET['posts'])){

	$id=$_GET['posts'];
	$query2= "SELECT * FROM User where id='$id'";
	$readd=$mysqli->query($query2);

}

?>

<style type="text/css">
	
.rooms img{
	width: 50px;
	height: 50px;
}

</style>
<div class="container">
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Age</th>
      <th>Text</th>
      <th>Image</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row= $readd->fetch_assoc()) { ?>

    <tr>
      <td> <?php echo $row['id'];  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['age'];  ?></td>
      <td><?php echo $row['text_user'];  ?></td>
      <td class="rooms">

      		<?php  $image_name="SELECT * FROM User as u join details as d 
      					on u.id =d.proid where d.proid =".$row['id'];
      					$read1=$mysqli->query($image_name);

      					foreach ($read1 as $value) { ?>

      						<img src="uploads/<?php echo $value['images']; ?>" />
      						
      					<?php  } ?>
      					</td>
    </tr>
<?php   } ?>
  </tbody>
</table> 

</div>




<?php  include 'footer.php' ; ?>