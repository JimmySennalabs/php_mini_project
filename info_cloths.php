<?php include 'header.php'; ?>
<pre><?php print_r($_POST) ?> </pre>

<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'testphp');
if ($mysqli->connect_error) {

  printf("can not connect databse %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT * FROM `user` INNER JOIN `lot_cloths` ON`user`.id = `lot_cloths`.user_iduser INNER JOIN `cloths` 
ON `cloths`.idlot_cloths= `lot_cloths`.idlot_cloths LIMIT 0, 25";
$read = $mysqli->query($query);
if ($_POST['status'] != null) {
  $status = $_POST['status'];
  $id =  htmlspecialchars($_GET["id"]);
  $query = " UPDATE `lot_cloths` SET `status` = '$status' WHERE `lot_cloths`.`idlot_cloths` = $id;";
  $update = $mysqli->query($query);

  header("location: info_cloths.php");
  exit;
}

if (isset($_POST['submit'])) {


  $thin_shirt = $_POST['thin_shirt'];
  $thick_shirt = $_POST['thick_shirt'];
  $thin_shorts = $_POST['thin_shorts'];
  $thin_shorts = $_POST['thick_shorts'];
  $thin_shorts = $_POST['thin_skirt'];
  $thin_shorts = $_POST['thick_skirt'];
  $thin_shorts = $_POST['thin_dress'];
  $thin_shorts = $_POST['thick_dress'];
  $thin_shorts = $_POST['other'];
  $idlot_cloths = htmlspecialchars($_GET["posts"]);


  $query = "UPDATE `cloths` SET `thin_shirt`='$thin_shirt',`thick_shirt`='$thick_shirt',`thin_shorts`= '$thin_shorts',`thick_shorts`='$thick_shorts',
  `thin_skirt`='$thin_skirt',`thick_skirt`='$thick_skirt',`thin_dress`='$thin_dress',`thick_dress`='$thick_dress',`other`='$other' WHERE idlot_cloths = '$idlot_cloths'";
  $update = $mysqli->query($query);
}



?>
<script>
  console.log(<?= json_encode(htmlspecialchars($_GET["posts"])); ?>);
</script>

<div class="container-fluid">

  <div class="container">

    <h2>Cloths </h2>
    <hr>
    <table class="table table-hover">
      <thead>
        <tr>

          <?php if (!isset($_GET['posts'])) { ?>
            <th>ชื่อลูกค้า</th>
            <th>หมายเลขการรับเข้า</th>
            <th>จำนวนผ้า</th>
            <th>สถานะ</th>
            <th>วันที่รับเข้า</th>
            <th>รายละเอียด</th>
          <?php } else { ?>
            <th>หมายเลขการรับเข้า</th>
            <th>เสื้อบาง</th>
            <th>เสื้อหนา</th>
            <th>กางเกงบาง</th>
            <th>กางเกงหนา</th>
            <th>กระโปรงบาง</th>
            <th>กระโปรงหนา</th>
            <th>ชุดกระโปรงบาง</th>
            <th>ชุดกระโปรงหนา</th>
            <th>ผ้าพิเศษ</th>
          <?php } ?>

        </tr>
      </thead>
      <tbody>
        <?php while ($row = $read->fetch_assoc()) { ?>
          <tr class="table-active">

          </tr>

          <?php if (isset($_GET['posts'])) { ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="update">
              <tr class="table-active">
                <th>
                  <?php echo $row['idlot_cloths']; ?>
                <th>
                  <input type="text" class="form-control" name="thin_shirt" value="<?php echo $row['thin_shirt']; ?>">
                </th>
                <td>
                  <input type="text" class="form-control" name="thick_shirt" value="<?php echo $row['thick_shirt']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thin_shorts" value="<?php echo $row['thin_shorts']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thick_shorts" value="<?php echo $row['thick_shorts']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thin_skirt" value="<?php echo $row['thin_skirt']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thick_skirt" value="<?php echo $row['thick_skirt']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thin_dress" value="<?php echo $row['thin_dress']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="thick_dress" value="<?php echo $row['thick_dress']; ?>">
                </td>
                <td>
                  <input type="text" class="form-control" name="other" value="<?php echo $row['other']; ?>">
                </td>

                <td>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td>
              </tr>
            </form>

          <?php } else { ?>
            <tr class="table-active">
              <?php
              // $query = "SELECT * FROM `user` WHERE id ='{$row['idlot_cloths']}'";
              // $read = $mysqli->query($query);
              ?>

              <th><?php echo $row['name']; ?></th>
              <th><?php echo $row['idlot_cloths']; ?></th>
              <td><?php echo $row['num_cloths']; ?></td>

              <?php
              if ($row['status'] == 'wait for wash') {
                $status = 'รอซัก';
              } elseif ($row['status'] == 'washing') {
                $status = 'กำลังซัก';
              } elseif ($row['status'] == 'finish') {
                $status = 'เสร็จสิ้น';
              }
              ?>

              <td>
                <div class="form-group">
                  <form action="info_cloths.php?id=<?php echo  $row['idlot_cloths'];  ?>" method="POST">
                    <select name="status" onchange=" this.form.submit() ">

                      <option value="" selected disabled hidden><?php echo $status; ?></option>
                      <?php
                      if ($row['status'] != 'wait for wash') {
                        echo '<option value="wait for wash">รอซัก</option>';
                      }
                      if ($row['status'] != 'washing') {
                        echo '<option value="washing" >กำลังซัก</option>';
                      }
                      if ($row['status'] != 'finish') {
                        echo '<option value="finish">เสร็จสิ้น</option>';
                      }


                      ?>
                    </select>
                  </form>



                </div>

              </td>
              <td><?php echo $row['created_at']; ?></td>

              <td><a href="info_cloths.php?posts=<?php echo  $row['idlot_cloths'];  ?>">Edit</a></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include 'footer.php'; ?>