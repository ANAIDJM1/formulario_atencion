<?php
//variables primer form
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$arrive=$_POST["arrive"];
$depart=$_POST["depart"];

//variables
$description_tour_array= array();
$predeparture_info_array= array();
$eficiencia=$_POST['radioa'];
$comentarios=$_POST['area_coments'];
$ciudad_array = array();

  if(!empty($_POST['description_tour']))
  {
    //guarda los valores en un array de la descripcion del tour
    foreach($_POST['description_tour'] as $description_tours){
    array_push($description_tour_array,$description_tours);
      }
  }

  if(!empty($_POST['predeparture_info']))
  {
    //la informacion del predparture tour
    foreach($_POST['predeparture_info'] as $predeparture_infos){
    array_push($predeparture_info_array,$predeparture_infos);
      }
  }

  if(!empty($_POST['ciudad']))
  {
    //las ciudades que selecciono
    foreach($_POST['ciudad'] as $ciudads){
    array_push($ciudad_array,$ciudads);
      }
  }

?>


<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reports</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="forms.css">
</head>


<body>
  <div class="cabezal">
    <span class="logo"></span>
  </div>

  <form class="form2" action="envio.php" method="post">

    <!--===================VARIABLES=======================-->
    <!--==================index======================-->
    <input name="name" type="hidden" value="<?php echo $name;?>">
    <input name="lastname" type="hidden" value="<?php echo $lastname;?>">
    <input name="email" type="hidden" value="<?php echo $email;?>">
    <input name="arrive" type="hidden" value="<?php echo $arrive;?>">
    <input name="depart" type="hidden" value="<?php echo $depart;?>">
    <!--==================Form1=======================-->
    <input name="predeparture_desc[]" type="hidden" value="<?php echo implode(",",$description_tour_array);?>">
    <input name="predeparture_info[]" type="hidden" value="<?php echo implode(",",$predeparture_info_array);?>">
    <input name="predeparture_ef" type="hidden" value="<?php echo $eficiencia;?>">
    <input name="comentarios" type="hidden" value="<?php echo $comentarios;?>">



    <h1>ATTENTION</h1>
<p>For these places, the attention was:</p>

<!--=============For itemes checked=============-->
<?php

for($i=0;$i<count($ciudad_array);$i++)
{
  echo "
  <div class='preguntillas'>
  <p class='ciudad_itinerario'>".$ciudad_array[$i]."</p>
  <label class='container'>Excellent - Good
  <input type='radio' checked='checked' name='radio-".$ciudad_array[$i]."' value='Excellent - Good'>
  <span class='checkmark1'></span>
  </label>
  <label class='container'>Satisfactory  - Adequate
  <input type='radio' name='radio-".$ciudad_array[$i]."' value='Satisfactory  - Adequate'>
  <span class='checkmark1'></span>
  </label>
  <label class='container'>Poor
  <input type='radio' name='radio-".$ciudad_array[$i]."' value='Poor'>
  <span class='checkmark1'></span>
  </label>
  </div>";
}

?>


<!--============================-->
<h1 style="text-align: center;">ITINERARY</h1>
<p>If the itinerary could have been changed to spend more time in some places and less time in others, how would you have changed it?</p>

<!--=============For each city checked=============-->

<?php

for($i=0;$i<count($ciudad_array);$i++)
{
  echo "<div class='preguntillas'>
    <span class='ciudad_itinerario'>".$ciudad_array[$i].":</span>
    </br>
    <label class='container2'>
    <input type='radio' checked='checked' name='radio_it-".$ciudad_array[$i]."' value='Excellent - Good'>
    <span class='raditi'></span>
    <span class='etiqueta'>Excellent - Good</span>
    </label>

    <label class='container2'>
    <input type='radio' name='radio_it-".$ciudad_array[$i]."' value='Satisfactory  - Adequate'>
    <span class='raditi'></span>
    <span class='etiqueta'>Satisfactory  - Adequate</span>
    </label>
    <label class='container2'>
    <input type='radio' name='radio_it-".$ciudad_array[$i]."' value='Poor'>
    <span class='raditi'></span>
    <span class='etiqueta'>Poor</span>
    </label>
  </div>";
  echo "</br>";
}

?>

<div class="form-control">
    <input type="submit" value="Submit">
</div>
  </form>


</body>
