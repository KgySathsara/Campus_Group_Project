@include('layout/dashboard')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/Account.css') }}" />
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">

                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       KgySathsara
                                    </h5>
                                    <h6>
                                        Faculty Of Science
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <!--li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>My Events</p>
                            <a href="">Cricket</a><br/>
                            <a href="">Carrom</a><br/>
                            <a href="">VolleyBall</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>KgySathsara</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>K.G.Yohan Sathsara</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>yohansathsara87@gmail.com</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Reg-Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2019sp222</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Current Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>3rd Year</p>
                                    </div>
                                </div>

                                <!--div class="row">
                                    <div class="col-md-6">
                                        <label>Faculty</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Science</p>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
