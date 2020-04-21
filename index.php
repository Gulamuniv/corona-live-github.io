<!DOCTYPE html>
<html>
<head>
	<title>COVID-19</title>

  <?php include("links/link.php")?>
  <?php include("css/style.php")?>
</head>
<body onload ="fetch();">
<nav class="navbar navbar-expand-lg nav-style p-3">
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
        <a class="nav-link" href="#aboutId">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#symptomsId">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventionId">Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="indiancoronalive.php">IndiaCoronaLive</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="indiadaywisereport.php">dayWiseConfirm</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactId">Contact</a>
      </li>
      </ul>
  
  </div>
</nav>
<div class="main-header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksath.jpg" width="300px" height="300px">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
		<div class="rightSide w-100 h-100 d-flex justify-content-center align-items-center">
			<h1>Let's Stay at home and fight with corona!</h1>
		</div>	
		</div>
	</div>
</div>
<!-------------Corona latest update!---->
<section class="corona-update container-fluid">
	<div class="mb-5">
		<h3 class="text-uppercase text-center">covid-19 Live update in Wold</h3>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id ="tableval">
			<tr>
				<th>Countery</th>
				<th>TotalConfirmed</th>
				<th>totalRecovered</th>
				<th>TotalDeath</th>
				<th>Newreover</th>
				<th>NewDeath</th>

			</tr>
		</table>
	</div>
</section>

<!---********About section*************-->
<div class="container-fluid sub-section pt-5 pb-5" id ="aboutId">
	<div class="section-hedaer text-center mt-5 mb-5">
		<h1 class="text-capitalize">About Covid-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-5 col-12 ml-5">
			<img src="images/aboutcorona.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>what is covid 19(corona?)</h2>
			<p>So far, 130 COVID-19 cases have been reported from areas under Thane Municipal Corporation, 73 from Kalyan - Dombivali.</p>
			<p>The number of confirmed coronavirus cases in Maharashtra's Thane district rose to 364 after 44 more people tested positive for the infectious disease, authorities said on Sunday.Stressing on the importance of a complete shutdown in view of the novel coronavirus, Delhi chief minister Arvind Kejriwal on Sunday said that there will be no relaxation in the lockdown restrictions in the hotspot areas across the city.</p>
		</div>
	</div>
</div>

<!--------- Corona symtoms----------->
<div class="container-fluid corona-sym pt-5 pb-5" id ="symptomsId">
	<div class="section-hedaer text-center mt-5 mb-5">
		<h1 class="text-capitalize">corona symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure>
					<img src="images/cough.jpg" alt="" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
					
				</figure>
				
			</div>
		</div>
	</div>
</div>

<!--------- Prevention angain corona----------->
<div class="container-fluid sub-section corona-sym pt-5 pb-5" id ="preventionId">
	<div class="section-hedaer text-center mt-5 mb-5">
		<h1 class="text-capitalize">Prevention of corona virus </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4  col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="images/aboutcorona.jpg" alt="" class="img-fluid" width="90" height="90">
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.

					
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


	<!--------- Contact us----------->
<div class="container-fluid sub-section corona-sym pt-5 pb-5" id ="contactId">
	<div class="section-hedaer text-center mt-5 mb-5">
		<h1 class="text-capitalize">Prevention of corona virus </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
	<form action="links/link.php" method="POST" enctype= multipart/form-data>
	<div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name ="username" placeholder="User name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name ="email"  placeholder="name@example.com" autocomplete ="off" required>
  </div>
  <div class="form-group">
    <label>Mobile number</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile number" autocomplete="off" required>
  </div>
  <div class="form-group">
  <label>symptoms</label>
    <input type="text" class="form-control" name="symptoms" placeholder="Enter symptoms " autocomplete="off" required>
  </div>
 <div class="form-group">
    <label >Message </label>
    <textarea class="form-control" placeholder="Write here...." rows="3" name="message"></textarea>
  </div>
  <input type="submit" name="Submit" class="btn btn-success" value="Send">
</form>
			</div>
		</div>
	</div>
</div>

<!-------- Top cursor----------->
<div class="container scroolTop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="TopFunction()" id ="myBtn"></i>
</div>
<!------footer-->
<footer class="mt-5"> 
	<div class="booter-style text-center text-white container-fluid">
		<p>Copyright by gulamkhan</p>
	</div>
</footer>



<script type="text/javascript">

	var mybutton = document.getElementById('myBtn');
 window.onscroll =function(){
 	scrollFunction()
 };
 function scrollFunction(){
 	if (document.body.scroolTop>100 || document.documentElement.scrollTop>100 ) {
 		mybutton.style.display="block";

 	}else{
 		mybutton.style.display="non";
 	}
 }
	function TopFunction(){
       document.body.scroolTop =0;
       document.documentElement.scrollTop =0;

	}

	function fetch(){
		$.get( "https://api.covid19api.com/summary" ,
		function(data){
              // console.log(data['Countries'].length);
		 var tbval  =document.getElementById('tableval');
		 for (var i = 1; i < data['Countries'].length; i++) {
		 	var x =tbval.insertRow();
		 	x.insertCell(0);
		 	tbval.rows[i].cells[0].innerHTML =data['Countries'][i-1]['Country'];
		  tbval.rows[i].cells[0].style.background ='#7a4a91';
		  tbval.rows[i].cells[0].style.color ='#fff';

		  x.insertCell(1);
		 	tbval.rows[i].cells[1].innerHTML =data['Countries'][i-1]['TotalConfirmed'];
		  tbval.rows[i].cells[1].style.background ='#4bb7d8';

		  x.insertCell(2);
		 	tbval.rows[i].cells[2].innerHTML =data['Countries'][i-1]['TotalRecovered'];
		  tbval.rows[i].cells[2].style.background ='#4bb7d8';


		  x.insertCell(3);
		 	tbval.rows[i].cells[3].innerHTML =data['Countries'][i-1]['TotalDeaths'];
		  tbval.rows[i].cells[3].style.background ='#4bb7d8';

		  x.insertCell(4);
		 	tbval.rows[i].cells[4].innerHTML =data['Countries'][i-1]['NewRecovered'];
		  tbval.rows[i].cells[4].style.background ='#4bb7d8';
		   x.insertCell(5);
		 	tbval.rows[i].cells[5].innerHTML =data['Countries'][i-1]['NewDeaths'];
		  tbval.rows[i].cells[5].style.background ='#4bb7d8';
		 }
		}
	);
	}
</script>
</body>
</html>
