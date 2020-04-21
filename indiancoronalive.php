
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

<section class="corona-update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">covid-19 Live update in India</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id ="tableval">
      <tr>
        <th class="text-capitalize">lastupdatedtime</th>
        <th class="text-capitalize">state</th>
        <th class="text-capitalize">confirmed</th>
        <th class="text-capitalize">active</th>
        <th class="text-capitalize">recovered</th>
        <th class="text-capitalize">deaths</th>

      </tr>
    </table>

<?php 
/*$data = file_get_contents('https://api.covid19india.org/data.json');

$coronadat =json_decode($data,true);
$satecount = count($coronadat['statewise']);
 $i =1;
 while ($i <=$satecount ) {
  ?>
<tr><td><?php  echo($coronadat['statewise'][$i]['lastupdatedtime']);?></td>
  <td><?php  echo($coronadat['statewise'][$i]['state']);?></td>
  <td><?php  echo($coronadat['statewise'][$i]['confirmed']);?></td>
  <td><?php  echo($coronadat['statewise'][$i]['active']);?></td>
  <td><?php  echo($coronadat['statewise'][$i]['recovered']);?></td>
  <td><?php  echo($coronadat['statewise'][$i]['deaths']);?></td>
  </tr>
  
  <?php 
 }*/
?>
  </div>
</section>
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
    $.get( "https://api.covid19india.org/data.json" ,
    function(data){
              console.log(data['statewise'].length);
     var tbval  =document.getElementById('tableval');
     for (var i = 1; i < data['statewise'].length; i++) {
      var x =tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML =data['statewise'][i-1]['lastupdatedtime'];
      tbval.rows[i].cells[0].style.background ='#7a4a91';
      tbval.rows[i].cells[0].style.color ='#fff';

      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML =data['statewise'][i-1]['state'];
      tbval.rows[i].cells[1].style.background ='#4bb7d8';

      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML =data['statewise'][i-1]['confirmed'];
      tbval.rows[i].cells[2].style.background ='#4bb7d8';


      x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML =data['statewise'][i-1]['active'];
      tbval.rows[i].cells[3].style.background ='#4bb7d8';

      x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML =data['statewise'][i-1]['recovered'];
      tbval.rows[i].cells[4].style.background ='#4bb7d8';
       x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML =data['statewise'][i-1]['deaths'];
      tbval.rows[i].cells[5].style.background ='#4bb7d8';
     }
    }
  );
  }
  </script>
</body>
</html>
