<!DOCTYPE html>
<html>
<head>
	<title>corona</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-light bg-dark p-3 nav_color">

  <a href="/" class="navbar-brand"></a>
  <button type="button" class="navbar-toggler bg-light" data-toggle="collapse"
  data-target="#nav" name="button"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse justify-content-between" id="nav">
  <ul class="navbar-nav pr-5 text-capitalize">   

   <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3"
      href="index.php"><h5>COVID-19</h5></a>
 </li>
</ul>
 <ul class="navbar-nav pr-5 text-capitalize">
    <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#aboutid">about</a></li>

    <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#sympid">symptoms</a></li>

      <li class="nav-item">
        <a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#preventid">prevention 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light text-uppercase font-weight-bold px-3" href="indiacoronalive.php">worldcoronalive
        </a>
      </li>

<li class="nav-item">
<a class="nav-link text-light text-uppercase font-weight-bold px-3" href="indiadaywise.php">IndiaDayWise
        </a>
      </li>

      <li class="nav-item">
<a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#contactid">contact
        </a>
      </li>
</head>

  </div>


  </ul>


  </div>
</nav>

<section class="corona_update container-fluid">
	<div class="my-3">
		<h3 class="text-uppercase text-center"> COVID-19 Live Update Of The INDIA Day Wise</h3>
	</div>
	<div class="table-responsive">
		<table class="table text-center" id="tbl">
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data,true);

$totalcount = count($coronadata['cases_time_series']);

$i=0;
while ($i < $totalcount){
?>
<tr>
	<th class="text-left">Date & month</th>
	<th colspan="5"></th>
</tr>
<tr>
	<td colspan="6" class="text-left"> <?php echo $coronadata['cases_time_series'][$i]['date'] . " <br> " ; ?> </td>
</tr>
<tr class="text-capitalize text-white">
	<th style="color: #fff; background: #2196f3;">total confirmed</th>
	<th style="color: #fff; background: #ffc107;">daily confirmed</th>
	<th style="color: #fff; background: #008c76FF;">daily recovered</th>
	<th style="color: #fff; background: #e91e7f;">daily deceased</th>
	<th style="color: #fff; background: #4caf50;">total recovered</th>
	<th style="color: #fff; background: #EE2737FF;">total deceased</th>
</tr>
<tr class="mb-5">
	<td style="background: #bed2f3;"> <?php echo $coronadata['cases_time_series'][$i]['totalconfirmed'] . "<br>" ; ?></td>
	<td style="background: #ffe493;"> <?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed'] . "<br>" ; ?></td>
	<td style="background: #9ED9CCFF;"> <?php echo $coronadata['cases_time_series'][$i]['dailyrecovered'] . "<br>" ; ?></td>
	<td style="background: #fc95c6;"> <?php echo $coronadata['cases_time_series'][$i]['dailydeceased'] . "<br>" ; ?></td>
	<td style="background: #88d28b;"> <?php echo $coronadata['cases_time_series'][$i]['totalrecovered'] . "<br>" ; ?></td>
	<td style="background: #fb99a1;"> <?php echo $coronadata['cases_time_series'][$i]['totaldeceased'] . "<br>" ; ?></td>
</tr>

<?php
$i++;
}
?>

		</table>
		
	</div>
	

</section>
<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!------------footer--->
<footer class="mt-5">
<div class="footer text-center bg-dark text-white container-fluid">
<p>copyright by KeshavRana</p>
</div>
  </footer>
<script>
mybutton = document.getElementById('myBtn');
window.onscroll=function() {scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    mybutton.style.display = "block";
  } else {
    mybutton.style.display ="none";
  }
}
function topFunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}

</script>

</body>
</html>