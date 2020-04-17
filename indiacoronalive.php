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
      href="#"><h5>COVID-19</h5></a>
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
        <a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#live">worldcoronalive 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light text-uppercase font-weight-bold px-3" href="indiacoronalive.php">indiacoronalive 
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


<section class="corona_update container-fluid mt-5" id="live">
  <div class="mb-3">
    <h3 class="text-center text-uppercase pb-5">COVID-19 LIVE UPDATES OF THE WORLDS </h3>
    <div class="table-responsive">
      <table class=" table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
        </tr>
      </table>
    </div>

  </div>
  
</section>





<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  
</div>

<!------------footer--->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by KeshavRana</p>
    
  </div>
  
</footer>


<script>

function fetch(){
  $.get("https://api.covid19api.com/summary",

    function (data){
      var tbval = document.getElementById('tbval');

      for(var i=1; i<(data['Countries'].length); i++){
        var x = tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background = '#7a4a91';

        tbval.rows[i].cells[0].style.color = '#fff';

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background = '#4bb7d8';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background = '#4bb7d8';

        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background = '#f36e23';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background = '#4bb7d8';

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background = '#9cc850';

        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background = '#f36e23';

      }
    }
  );

}

</script>




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