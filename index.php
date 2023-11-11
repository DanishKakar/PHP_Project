<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="container">

<h1 class="text-center">Cards</h1>
<div class="card col-sm-6 col-xs-12 col-md-4 col-lg-3" id="div1">
  <div class="card-body">
    <h2 class="card-title text-center">Login</h2>
    <p class="card-text">Some example text. Some example text.</p>
    <form action="">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required> 
          <br>   
          <a href="">forgot-password</a>                      
      </div>
      <div class="text-center">
        <button class="btn btn-primary float-center">Login</button>
      </div>
    </form>
  </div>
</div>
</div>
        
</body>
</html>