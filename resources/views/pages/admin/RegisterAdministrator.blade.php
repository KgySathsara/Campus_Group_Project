@include('layout/dashboard')

<link rel="stylesheet" href="{{ asset('css\register.css') }}" type="text/css"/>


<h2>Sport Application Registration</h2>
<form action="{{ route('ADstore') }}" method="POST">
    @csrf
    <label for="name">Full Name:</label>
        <input type="text" id="name" name="Full Name" required>

    <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

    <label for="phone">Registration Number:</label>
        <input type="tel" id="Reg Number" name="Reg Number" required>

    <!--label for="resume">Resume (PDF or Word):</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required-->

    <label for="Level">Current Level:
        <select type="String" id="position" name="Level" required>
            <option >Select Current Level</option>
            <option >1st Year</option>
            <option >2nd Year</option>
            <option >3rd Year</option>
            <option >4th Year</option>
        </select>
    </label>

    <input type="submit" value="Submit Application">
</form>


