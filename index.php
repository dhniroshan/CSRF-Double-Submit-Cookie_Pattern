<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CSRF - Synchronizer Token Pattern</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
          
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Login</h4>
              <form method="POST" action="validate.php">
               
                <div class="form-group">
                  <label>Username</label>

                  <input id="username" type="username" class="form-control" name="username" value="admin" required>
                </div>

                <div class="form-group">
                  <label for="password">Password
                  </label>
                  <input id="password" type="password" class="form-control" name="password" required value="admin">
                </div>

                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-primary btn-block">
                    Login
                  </button>
                </div>
              </form>
            </div>
			
			<div class="card-body">
                  <h5> Login Credentials : </h5>
                  <p style="margin-top:20px"> Username - admin </p>
				  <p style="margin-top:20px"> Password - admin </p>
                </div>
			
          </div>
          <div class="footer">
            Copyright &copy; CSRF Synchronizer Token Pattern
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>