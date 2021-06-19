<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Wantana Laundry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Index.php">Wantana</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage User<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_user.php">Add User</a></li>
          <li><a href="info_user.php">User Info</a></li>
          
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Employee<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_employ.php">Add Employee</a></li>
          <li><a href="info_employ.php">Employee Info</a></li>
          
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Cloths<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_lot_cloths.php">Add lot cloths</a></li>
          <li><a href="info_cloths.php">Cloths info</a></li>
          
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>

</body>