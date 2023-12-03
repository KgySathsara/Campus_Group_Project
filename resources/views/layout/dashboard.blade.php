<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ asset('assets\css\dashboard.css') }}" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<div id="mySidenav" class="sidenav">

  <a href="{{ route('index') }}" class="logo"><span>Sport Managment System</span>-university of Jaffna</a>

  <a href="{{ route('home') }}" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Home</a>
  <a href="{{ route('facultyLoding') }}"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Faculty Loading</a>
  <a href="{{ route('register') }}"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Register Administrator</a>
  <!--a href="{{ route('note') }}"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Notice</a-->
  <a href="{{ route('todo') }}"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Reminder</a>
  <a href="{{ route('events') }}"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Events</a>
  <a href="{{ route('accounts') }}"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>



</div>

<div id="main">

	<div class="head">
		<div class="col-div-6">
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
        <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
    </div>

	<div class="col-div-6">
	<div class="profile">
		<img src="{{ asset('assets\img\team\mt4to.jpeg') }}" class="pro-img" />
		<p>Kgy-Sathsara<span>Front-End Developer</span></p>
	</div>
    </div>
	    <div class="clearfix"></div>
    </div>

	<div class="clearfix"></div>
	<br/>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
    $(".logo span").css('margin-left', '-10px');
    $(".icon-a").css('visibility', 'hidden');
    $(".icons").css('visibility', 'visible');
    $(".icons").css('margin-left', '-8px');
    $(".nav").css('display','none');
    $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
    $(".icon-a").css('visibility', 'visible');
    $(".icons").css('visibility', 'visible');
    $(".nav").css('display','block');
    $(".nav2").css('display','none');
 });

</script>

</body>


</html>
