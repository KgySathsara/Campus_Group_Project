@include('layout/dashboard')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="{{ asset('css/Adminsign.css') }}" />
  </head>


  <body>
    <div class=" container">
      <h1 class="form-title">Registration</h1>
      <form action="{{ route('ADevent') }}" method="post">
        @csrf
        <div class="main-user-info">

          <div class="user-input-box">
            <label for="Full Name">Full Name</label>
            <input type="Full Name"
                    id="Full Name"
                    name="Full Name"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="Reg Number">Reg Number</label>
            <input type="Reg Number"
                    id="Reg Number"
                    name="Reg Number"
                    placeholder="Enter Reg Number"/>
          </div>
          <div class="user-input-box">
            <label for="Faculty">Faculty</label>
            <input type="Faculty"
                    id="Faculty"
                    name="Faculty"
                    placeholder="Enter Faculty"/>
          </div>
          <div class="user-input-box">
            <label for="Sport">Sport</label>
            <input type="Sport"
                    id="Sport"
                    name="Sport"
                    placeholder="Select Sport"/>
          </div>
          <div class="user-input-box">
            <label for="Current Level">Current Level</label>
            <input type="Current Level"
                    id="Current Level"
                    name="Current Level"
                    placeholder="Select Current Level"/>
          </div>
          <div class="user-input-box">
            <label for="Massage">Massage</label>
            <textarea type="Massage" id="Massage" name="Message" rows="1" placeholder="Type your Message" ></textarea>
          </div>

        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>

      </form>
    </div>
  </body>
</html>
