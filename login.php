<?php require_once('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
  <script>
  $(function(){
      $('#enviar').on('click',function(e){
          e.preventDefault;
          var email=$('#email').val();
          var pswd=$('#pswd').val();
          $.ajax({
            type: "POST",
            url: "index.php",
            data: ('email='.email.'&pswd='.pswd)
          })

      })
  })
  </script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form action="" >
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
		<br><a href="signup.php">sign in</a><br>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>

</body>
</html>
