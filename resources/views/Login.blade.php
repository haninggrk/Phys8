<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Login</title>
</head>
<body>
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-8 w-auto" src="https://i.ibb.co/Snh9b7y/image.png" alt="Workflow">
    <h2 class="mt-6 text-center text-6    xl font-extrabold text-white">
      Masuk
    </h2>
  </div>
<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div style="background-color:#F9E428" class= "py-8 px-4 shadow sm:rounded-lg sm:px-10">
    <form class="space-y-6" action="{{route ('login_process')}}" method="POST">
      @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
              Belum Punya Akun?
            </a>
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Log In
          </button>
        </div>
      </form>

     

<!-- <div class="row justifed-content-center">
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
</div> -->
</body>
</html>