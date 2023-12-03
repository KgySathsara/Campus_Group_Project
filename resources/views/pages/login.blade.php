<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

  </head>

  <body>

    <div class="container">
      <form action="{{ route('main') }}"  method="post">
        @csrf
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" placeholder="username" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" /> Remember me</label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="{{ route('sign') }}">Register here!</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
