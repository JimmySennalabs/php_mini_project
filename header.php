<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Same Page Property</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="add_user.php">Add User</a>
            <a class="dropdown-item" href="info_user.php">User Info</a>
          </div>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Employee</a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="add_employ.php">Add Employee</a>
          <a class="dropdown-item" href="info_employ.php">Employee info</a>

        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">cloths</a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="add_lot_cloths.php">Add lot cloths</a>
          <a class="dropdown-item" href="info_employ.php">cloths info</a>

        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</body>