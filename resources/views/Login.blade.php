<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signin.css">
    <title>Login</title>
</head>
<body>
<div class="row justifed-content-center">
  <div class="col-lg-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
      <form action="{{route ('login_process')}}" method="POST">
    @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control"  placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control"  placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>
        <small class="d-block text-center mt-3">
          Have you registed yet?<a href="/register">Register Now!</a>
        </small>
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 Phys8</p>
 
    </main>
    
  </div>
</div>
</body>
</html>