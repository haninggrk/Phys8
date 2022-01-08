<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signin.css">
    <title>Register</title>
</head>
<body>
<div class="row justifed-content-center">
  <div class="col-lg-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Registeration</h1>
      <form method="POST">
      
      <div class="form-floating">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <label for="Name">Nama</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control"placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmed Password">
          <label for="floatingPassword">Password confirmation</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <small class="d-block text-center mt-3">
          Already registered?<a href="/">Login</a>
        </small>
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 Phys8</p>
      </form>
    </main>
    
  </div>
</div>
</body>
</html>