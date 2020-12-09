<?php

require_once ('conect.php');

//=============Enviar datos del formulario y redirigir a envio.php=============-->

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$arrive= $_REQUEST['arrive'];
$depart= $_REQUEST['depart'];
//variables
$predeparture_desc_array = array();
$predeparture_info_array = array();
$predeparture_eficiencia=$_REQUEST['predeparture_ef'];
$comentarios=$_REQUEST['comentarios'];



  if(!empty($_REQUEST['predeparture_desc']))
  {
    //guarda los valores en un array de la descripcion del tour
    foreach($_REQUEST['predeparture_desc'] as $description_tours){
    array_push($predeparture_desc_array,$description_tours);
      }
  }

  if(!empty($_REQUEST['predeparture_info']))
  {
    //la informacion del predparture tour
    foreach($_REQUEST['predeparture_info'] as $predeparture_infos){
    array_push($predeparture_info_array,$predeparture_infos);
      }
  }

$predeparture_description=implode(",",$predeparture_desc_array);
$predeparture_information=implode(",",$predeparture_info_array);

//-------------ciudades services e itinerarios

$lima_a="";
$lima_i="";
$cusco_a="";
$cusco_i="";
$sacredv_a="";
$sacredv_i="";
$mpp_a="";
$mpp_i="";
$arqpa_a="";
$arqpa_i="";
$colca_a="";
$colca_i="";
$nazca_a="";
$nazca_i="";
$puertom_a="";
$puertom_i="";
$puno_a="";
$puno_i="";

if(isset($_REQUEST['radio-Lima']))
{ $lima_a=$_REQUEST['radio-Lima'];}
if(isset($_REQUEST['radio_it-Lima']))
{$lima_i=$_REQUEST['radio_it-Lima'];}
if(isset($_REQUEST['radio-Cusco']))
{$cusco_a=$_REQUEST['radio-Cusco'];}
if(isset($_REQUEST['radio_it-Cusco']))
{$cusco_i=$_REQUEST['radio_it-Cusco'];}
if(isset($_REQUEST['radio-SacredValley']))
{$sacredv_a=$_REQUEST['radio-SacredValley'];}
if(isset($_REQUEST['radio_it-SacredValley']))
{$sacredv_i=$_REQUEST['radio_it-SacredValley'];}
if(isset($_REQUEST['radio-MachuPicchu']))
{$mpp_a=$_REQUEST['radio-MachuPicchu'];}
if(isset($_REQUEST['radio_it-MachuPicchu']))
{$mpp_i=$_REQUEST['radio_it-MachuPicchu'];}
if(isset($_REQUEST['radio-Puno']))
{$puno_a=$_REQUEST['radio-Puno'];}
if(isset($_REQUEST['radio_it-Puno']))
{$puno_i=$_REQUEST['radio_it-Puno'];}
if(isset($_REQUEST['radio-Arequipa']))
{$arqpa_a=$_REQUEST['radio-Arequipa'];}
if(isset($_REQUEST['radio_it-Arequipa']))
{$arqpa_i=$_REQUEST['radio_it-Arequipa'];}
if(isset($_REQUEST['radio-ColcaCanyon']))
{$colca_a=$_REQUEST['radio-ColcaCanyon'];}
if(isset($_REQUEST['radio_it-ColcaCanyon']))
{$colca_i=$_REQUEST['radio_it-ColcaCanyon'];}
if(isset($_REQUEST['radio-NazcaParacas']))
{$nazca_a=$_REQUEST['radio-NazcaParacas'];}
if(isset($_REQUEST['radio_it-NazcaParacas']))
{$nazca_i=$_REQUEST['radio_it-NazcaParacas'];}
if(isset($_REQUEST['radio-Amazon']))
{$puertom_a=$_REQUEST['radio-Amazon'];}
if(isset($_REQUEST['radio_it-Amazon']))
{$puertom_i=$_REQUEST['radio_it-Amazon'];}





      $sql = "INSERT INTO datos(name,
      lastname,
      email,
      arrive,
      departure,
      predep_desc,
      predep_info,
      predep_efi,
      comments,
      lima_a,
      lima_i,
      cusco_a,
      cusco_i,
      sacredv_a,
      sacredv_i,
      mpp_a,
      mpp_i,
      arqpa_a,
      arqpa_i,
      colca_a,
      colca_i,
      nazca_a,
      nazca_i,
      puertom_a,
      puertom_i,
      puno_a,
      puno_i
    )
      VALUES
      ('$name',
        '$lastname',
        '$email',
        '$arrive',
        '$depart',
        '$predeparture_description',
        '$predeparture_information',
        '$predeparture_eficiencia',
        '$comentarios',

        '$lima_a',
        '$lima_i',
        '$cusco_a',
        '$cusco_i',
        '$sacredv_a',
        '$sacredv_i',
        '$mpp_a',
        '$mpp_i',
        '$arqpa_a',
        '$arqpa_i',
        '$colca_a',
        '$colca_i',
        '$nazca_a',
        '$nazca_i',
        '$puertom_a',
        '$puertom_i',
        '$puno_a',
        '$puno_i')";


      if(mysqli_query($conection, $sql)){
        echo "<script>alert('Records added successfully!');</script>";
      } else{
          echo "<script>alert('ERROR: Could not able to execute $sql. " . mysqli_error($conection)."');</script>";
      }

      // Close connection
      mysqli_close($conection);
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

<div class="cuerpos">
<img src="reviews.jpg" alt="Could you leave us a review?, please???? ...">
  <div class="form-controlq">
      <a href="url_trip_advisor">YES,Leave a Review in T.A</a>
      <a href="index.php">NO, but thank you</a>
  </div>

</div>



  </body>
