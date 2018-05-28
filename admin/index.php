<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin | Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin col-md-3" action="includes/login.php" method="post" style="top:50%; left:35%;">
      <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
      <label class="sr-only">Username</label>
      <input type="text"  name="username"  class="form-control" placeholder="Email address" required autofocus>
      <label class="sr-only">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>
