<?php include 'header.php' ?>
<pre><?php print_r($_POST) ?> </pre>

<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $thin_shirt = $_POST['thin_shirt'];
  $thin_shorts = $_POST['thin_shorts'];
  $thin_skirt = $_POST['thin_skirt'];
  $thin_dress = $_POST['thin_dress'];
  $thick_shirt = $_POST['thick_shirt'];
  $thick_shorts = $_POST['thick_shorts'];
  $thick_skirt = $_POST['thick_skirt'];
  $thick_dress = $_POST['thick_dress'];
  $other = $_POST['other'];
  $num = $thin_shirt + $thin_shorts + $thin_skirt + $thin_dress + $thick_shirt + $thick_shorts + $thick_skirt + $thick_dress + $other;

  $query = "SELECT `id` FROM `user`  WHERE name LIKE '%$name%'";
  $read = $mysqli->query($query);
  $name = $read->fetch_assoc();
  $iduser =$name['id'];

  $query = "INSERT INTO `lot_cloths`(`idlot_cloths`, `num_cloths`, `created_at`, `user_iduser`) VALUES (null,'$num',null,'$iduser')";
  $insert = $mysqli->query($query);

  $query = "SELECT * FROM `lot_cloths` ORDER BY idlot_cloths DESC LIMIT 1";
  $read = $mysqli->query($query);
  $last_lot = $read->fetch_assoc();
  $idlot = $last_lot['idlot_cloths'];

  $query = "INSERT INTO `cloths`(`id_cloths`, `thin_shirt`, `thin_shorts`, `thin_skirt`, `thin_dress`, `thick_shirt`, `thick_shorts`, `thick_skirt`, `thick_dress`, `other`, `idlot_cloths`) VALUES (null,'$thin_shirt','$thin_shorts', '$thin_skirt', '$thin_dress','$thick_shirt', '$thick_shorts','$thick_skirt','$thick_dress','$other','$idlot')";
  $insert = $mysqli->query($query);

}

?>


<?php 
  echo("<script>console.log('PHP: " . $thin_shirt . "');</script>");
  echo("<script>console.log('PHP: " .  $idlot . "');</script>");
?>


<form  action="" method="post" enctype="multipart/form-data">

    <label for="name">ชื่อ</label>
    <input type="text" class="form-control" name="name" placeholder="ชื่อลูกค้า">

<div class="container">
  <div class="row">
    <div class="col">
      
    <div class="card">
  <div class="card-header">
    ผ้าบาง
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
 
    <div class="form-group row">
      <label for="thin_shirt" class="col-sm-3 col-form-label">เสื้อ</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thin_shirt" placeholder="จำนวน">
      </div>
    </div>

    <div class="form-group row">
      <label for="thin_shorts" class="col-sm-3 col-form-label">กางเกง</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thin_shorts" placeholder="จำนวน">
      </div>
    </div>
    <div class="form-group row">
      <label for="thin_skirt" class="col-sm-4 col-form-label">กระโปรง</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thin_skirt" placeholder="จำนวน">
      </div>
    </div>
    <div class="form-group row">
      <label for="thin_dress" class="col-sm-4 col-form-label">ชุดเดรส</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thin_dress" placeholder="จำนวน">
      </div>
    </div>
    </blockquote>
  </div>
</div>
    </div>
    <div class="col">
     
    <div class="card">
  <div class="card-header">
    ผ้าหนา
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
 
    <div class="form-group row">
      <label for="thick_shirt" class="col-sm-3 col-form-label">เสื้อ</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thick_shirt" placeholder="จำนวน">
      </div>
    </div>

    <div class="form-group row">
      <label for="thick_shorts" class="col-sm-3 col-form-label">กางเกง</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thick_shorts" placeholder="จำนวน">
      </div>
    </div>
    <div class="form-group row">
      <label for="thick_skirt" class="col-sm-4 col-form-label">กระโปรง</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thick_skirt" placeholder="จำนวน">
      </div>
    </div>
    <div class="form-group row">
      <label for="thick_dress" class="col-sm-4 col-form-label">ชุดเดรส</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="thick_dress" placeholder="จำนวน">
      </div>
    </div>
    </blockquote>
  </div>
</div>
    </div>
    
</div>
    </div>
  </div>

</div>
  
<label for="other">ผ้าพิเศษ</label>
    <input type="number" class="form-control" name="other" placeholder="จำนวน">

<button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'footer.php' ?>