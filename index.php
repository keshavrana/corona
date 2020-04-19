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
<marquee style="color:red; font-size:15px;" behavior="scroll" direction="left" scrollamount="8" class="pt-2 text-capitalize">This data is being updating every 15 minutes</marquee>

<!----


<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#live">worldcoronalive</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDayWise</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>

    </ul>
  </div>
</nav>

--->

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 ">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/modi2.jpg" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.webp" width="125" height="125"></span>na Virus</h1>
				
			</div>
		</div>
		
	</div>
	
</div>

<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase pb-5">COVID-19 LIVE UPDATES OF THE INDIA </h3>
    <div class="table-responsive">
      <table class=" table table-bordered table-striped text-center">
        <tr>
          <th> Lastupdatedtime </th>
          <th> State </th>
          <th> Confirmed </th>
          <th>Active</th>
          <th>Recovered</th>
          <th>Death</th>  
        </tr>


<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=0;
while($i < $statescount){
  ?>
  <tr>
    <td style="background: #7a4a91;" class="text-white"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
    <td style="background: #4bb7d8;"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
    <td style="background: #9cc850;"><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
    <td style="background: #f36e23;"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>

  </tr>

<?php
  $i++;

}
?>


      </table>
    </div>

  </div>
  
</section>

  <!--   ****************** about section ******* -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
			</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/about.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID_19 (Corona-Virus)</h2><br>
			<p>COVID-19 is the infectious disease caused by the most recently dicovered coronavirus. This new virus and diseas were unknown brfore the outbreak began in Wuhan, China, in December 2019.</p>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronavirus which may causes respiratory infections ranging form the common cold to move serve Acute Respiratory Syndrome (SARS), The most rcently discovered coronavirus disease COVID-19.</p>
			
		</div>
		
	</div>
	
</div>

<!-- /////////////// corona symptoms ////// -->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus symptoms</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/cough.png" class="img-fluid" width="120"
					height="120">
					<figcaption>cough</figcaption>
					</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/rhinitis.png" class="img-fluid" width="120"
					height="120">
					<figcaption>runny nose</figcaption>
					</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/fever.png" class="img-fluid" width="120"
					height="120">
					<figcaption>fever</figcaption>
					</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/sick.png" class="img-fluid" width="120"
					height="120">
					<figcaption>cold</figcaption>
					</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/arm.png" class="img-fluid" width="120"
					height="120">
					<figcaption>tiredness</figcaption>
					</figure>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center">
					<img src="images/breathing.png" class="img-fluid" width="120"
					height="120">
					<figcaption>difficulty breathing</figcaption>
					</figure>
					</div>
					
				</div>
				
			</div>
		</div>


<!-- /////////////// corona prevention ////// -->
<div class="container-fluid pt-5 sub_section pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps prevention Against Coronavirus </h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/wash.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>	
							</div>
						</div>
						</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/man.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>	
							</div>
						</div>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/keep-distance.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>	
							</div>
						</div>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/stay-home.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Stay home and self-isolate from others in the household if you feel unwell</p>	
							</div>
						</div>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/aaj.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Stay informed by watching news & follow the recommended practices</p>	
							</div>
						</div>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/doctor.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>If you have fever, caugh and difficulty breathing, seek medical care early</p>	
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>

<!-- /////////////// corona prevention ////// -->
<div class="container-fluid pt-5 sub_section pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us ASAP</h1>
			</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">

		<form action="index.php" method="POST">

  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Mobile:</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
<div class="form-group">
	<label>Select Symptoms</label><br>
	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
		<label class="custom-control-label" for="customcheckbox1">Cold</label>	
	</div>
	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
		<label class="custom-control-label" for="customcheckbox2">Fever</label>	
	</div>
	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
		<label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>	
	</div>
	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
		<label class="custom-control-label" for="customcheckbox4">Triedness</label>	
	</div>
	
</div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
<!------------top cursor--->
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
<?php
include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$chk ="";
	foreach ($symp as $chk1) {
		$chk .= $chk1."," ;
	}
	$insertquery = "insert into coronacase( name, mobile, symp, message) values('$username', '$mobile', '$chk', '$msg')";
	$query = mysqli_query($con, $insertquery);

if ($query){
	?>
	<script>
		alert("connetion successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("Our Team Will Contact You ASAP");
	</script>
	<?php
	}

}

?>