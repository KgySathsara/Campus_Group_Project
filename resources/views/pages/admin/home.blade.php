@include('layout/dashboard')

<div class="col-div-3">
    <div class="box">
        <p>15<br/><span>Cricket Achievement</span></p>
        <!--i class="fa fa-users box-icon"></i-->
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>20<br/><span>FootBall Achievement</span></p>
        <!--i class="fa fa-list box-icon"></i-->
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>15<br/><span>Elle Achievement</span></p>
        <!--i class="fa fa-shopping-bag box-icon"></i-->
    </div>
</div>
<div class="col-div-3">
    <div class="box">
        <p>50<br/><span>All Achievement</span></p>
        <!--i class="fa fa-tasks box-icon"></i-->
    </div>
</div>
<div class="clearfix"></div>
<br/><br/>

<div class="col-div-8">
    <div class="box-8">
    <div class="content-box">
        <p>Following Sports <span>See All</span></p>
        <br/>
        <table>
<tr>
<th>Sports</th>
<th>Coach</th>
<th>Attendance</th>
</tr>
<tr>
<td>Cricket</td>
<td>Mr.Lasith</td>
<td>Yes</td>
</tr>
<tr>
<td>FootBall</td>
<td>Mr.Ronaldo</td>
<td>No</td>
</tr>
<tr>
<td>VolleyBall</td>
<td>Mr.Murali</td>
<td>Yes</td>
</tr>
<tr>
<td>Carrom</td>
<td>Miss.Helen</td>
<td>Yes</td>
</tr>


</table>
    </div>
</div>
</div>

<div class="col-div-4">
    <div class="box-4">
    <div class="content-box">
        <p>Total Achievement <span>See All</span></p>

        <div class="circle-wrap">
<div class="circle">
  <div class="mask full">
    <div class="fill"></div>
  </div>
  <div class="mask half">
    <div class="fill"></div>
  </div>
  <div class="inside-circle"> 70% </div>
</div>
</div>
    </div>
</div>
</div>

<div class="clearfix"></div>
</div>


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

