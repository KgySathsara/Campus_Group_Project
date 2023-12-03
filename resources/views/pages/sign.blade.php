<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}" />
  </head>


  <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
      <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="main-user-info">

          <div class="user-input-box">
            <label for="First Name">First Name</label>
            <input type="First Name"
                    id="First Name"
                    name="First Name"
                    placeholder="Enter First Name"/>
          </div>
          <div class="user-input-box">
            <label for="Last Name">Last Name</label>
            <input type="Last Name"
                    id="Last Name"
                    name="Last Name"
                    placeholder="Enter Last Name"/>
          </div>
          <div class="user-input-box">
            <label for="Username">Username</label>
            <input type="Username"
                    id="username"
                    name="Username"
                    placeholder="Enter Username"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="Reg Number">Reg Number</label>
            <input type="Reg Number"
                    id="Reg Number"
                    name="Reg Number"
                    placeholder="Enter Reg Number"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password"/>
          </div>

        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="other">Other</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>
        <div class="form-submit-btn">
            <p>If you have an Account <a href="{{ route('login') }}">Login here!</a></p>
          </div>
      </form>
    </div>
  </body>
</html>
