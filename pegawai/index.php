<html lang="en">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background-image:url('img/mug2.jpg');
            background-position: center top;
            background-repeat:no-repeat;
            background-size: cover;
        }
    </style>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
<div class="block-30 block-30-sm item"  data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">

          <h1>Login</h1>
              <form  class="form-inline"  action="proses_login.php" method="POST">
                <div class="form-group">
                  <span class="glyphicon glyphicon-user"></span>
                  <input type="text" class="form-control" placeholder="Username: admin" name="username" required>
                </div>
                <div class="form-group">
                  <span class="glyphicon glyphicon-lock "></span>
                  <input type="password" class="form-control " placeholder="Password: admin" name="password" required>
                </div>
                <div class="form-group">
                  <input type="submit" value="LOG IN" class="btn btn-primary py-3 px-5" name="submit">
                </div>
              </form>
              <?php
                if(isset($_GET['act'])){
                    if($_GET['act']=="failed"){
                      echo "<p>usernamenya dan passwordnya : admin</p>";
                    }
                  }
              ?>

             
        </div>
      </div>
    </div>
  </div>
</body>
</html>