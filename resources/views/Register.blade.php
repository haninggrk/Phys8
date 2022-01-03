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
      <form>
      
      <div class="form-floating">
          <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
          <label for="Name">Nama</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <small class="d-block text-center mt-3">
          Already registered?<a href="/login">Login</a>
        </small>
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 Phys8</p>
      </form>
    </main>
    
  </div>
</div>
</body>
</html>