<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('libraries.styles')
</head>

<body>
    @include('components.navbar')

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                  <div class="border border-3 border-primary"></div>
                  <div class="card bg-white">
                    <div class="card-body p-5">
                      <form class="mb-3 mt-md-4" action="{{ route('add') }}" method="post" enctype="multipart/form">
                        @csrf
                        <h2 class="fw-bold mb-2 text-uppercase ">LOGIN</h2>
                        <p class=" mb-5">Please enter your Username and password!</p>
                        <div class="mb-3">
                          <label for="Username" class="form-label ">Username</label>
                          <input type="Username" class="form-control" name="Username" placeholder="Enter Username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label ">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="*******">
                        </div>
                        <div class="d-grid">
                          <button class="btn btn-outline-dark" type="submit">Login</button>
                        </div>
                      </form>
                      <div>
                        <p class="mb-0  text-center">Don't have an account? <a href="{{ route('sign') }}"
                            class="text-primary fw-bold">Sign
                            Up</a></p>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @include('libraries.script')
</body>
</html>


/////////////////////////////////////////////////////////////////////////////



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    @include('libraries.styles')

</head>

<body>
    @include('components.navbar')

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                  <div class="border border-3 border-primary"></div>
                  <div class="card bg-white">
                    <div class="card-body p-5">
                      <form class="mb-3 mt-md-4" action="{{ route('store') }}" method="post" enctype="multipart/form">
                        @csrf
                        <h2 class="fw-bold mb-2 text-uppercase ">CREATE PROFILE</h2>
                        <p class=" mb-5">Please enter your Username and password!</p>

                        <div class="mb-3">
                            <label for="First Name" class="form-label ">First Name</label>
                            <input type="First Name" class="form-control" name="First Name" placeholder="Enter the First Name">
                        </div>

                        <div class="mb-3">
                            <label for="Last Name" class="form-label ">Last Name</label>
                            <input type="Last Name" class="form-control" name="Last Name" placeholder="Enter the Last Name">
                        </div>

                        <div class="mb-3">
                            <label for="Phone Number" class="form-label ">Phone Number</label>
                            <input type="Phone Number" class="form-control" name="Phone Number" placeholder="Enter the Phone Number">
                        </div>

                        <div class="mb-3">
                            <label for="Username" class="form-label ">Username</label>
                            <input type="Username" class="form-control" name="Username" placeholder="Enter the Username">
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label ">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter the email">
                        </div>

                        <div class="mb-3">
                          <label for="password" class="form-label ">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="*******">
                        </div>

                        <div class="d-grid">
                          <button class="btn btn-outline-dark" type="submit">Submit</button>
                        </div>
                      </form>
                      <div>
                        <p class="mb-0  text-center"><a href=""
                            class="text-primary fw-bold">
                            </a></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    @include('libraries.script')
</body>
</html>


/*
