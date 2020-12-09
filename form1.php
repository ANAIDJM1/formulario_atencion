<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$arrive=$_POST["arrive"];
$depart=$_POST["depart"];
?>

<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PreDeparture</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="forms.css">
</head>


<body>
  <div class="cabezal">
    <span class="logo"></span>
  </div>

  <form class="form2" action="form2.php" method="post">
        <h1>PREDEPARTURE</h1>
      <p>Did you find our description of the tour:</p>
    <div class="chekbuttone">
      <label class="container">Attractive
      <input type="checkbox" name="description_tour[]" value="Attractive" checked="checked">
      <span class="checkmark"></span>
    </label>
    <label class="container">Informative
      <input type="checkbox" name="description_tour[]" value="Informative">
      <span class="checkmark"></span>
    </label>
    <label class="container">Accurate
      <input type="checkbox" name="description_tour[]" value="Accurate">
      <span class="checkmark"></span>
    </label>
    </div>

  <p>Did you find the pre-departure information:</p>
<div class="chekbuttone">
  <label class="container">Informative
  <input type="checkbox" name="predeparture_info[]" checked="checked" value="Informative">
  <span class="checkmark"></span>
</label>
<label class="container">Useful
  <input type="checkbox" name="predeparture_info[]" value="Useful">
  <span class="checkmark"></span>
</label>
<label class="container">Comprehensive enough
  <input type="checkbox" name="predeparture_info[]" value="Comprehensive enough">
  <span class="checkmark"></span>
</label>
</div>

<p>Was our office efficient/helpful/etc.
    with dealing with your booking and answering questions?</p>
<div class="radionbuttone">
<label class="container">Excellent - Good
<input type="radio" checked="checked" name="radioa" value="Excellent - Good">
<span class="checkmark1"></span>
</label>
<label class="container">Satisfactory  - Adequate
<input type="radio" name="radioa" value="Satisfactory  - Adequate">
<span class="checkmark1"></span>
</label>
<label class="container">Poor
<input type="radio" name="radioa" value="Poor">
<span class="checkmark1"></span>
</label>
</div>

<div class="form-control">
<p>Any comments or suggestions?</p>
<textarea  name='area_coments' rows='10'></textarea>
</div>

<p>Places that you received attention:</p>
<div class="chekbuttone">
<label class="container">Arrival / Lima
<input type="checkbox" checked="checked" name="ciudad[]" value="Lima">
<span class="checkmark"></span>
</label>
<label class="container">Cusco
<input type="checkbox" name="ciudad[]" value="Cusco">
<span class="checkmark"></span>
</label>
<label class="container">Sacred Valley
<input type="checkbox" name="ciudad[]" value="SacredValley">
<span class="checkmark"></span>
</label>
<label class="container">Aguas Calientes / Machu Picchu
<input type="checkbox" name="ciudad[]" value="MachuPicchu">
<span class="checkmark"></span>
</label>

<label class="container">Puno / Titicaca Lake
<input type="checkbox" name="ciudad[]" value="Puno">
<span class="checkmark"></span>
</label>

<label class="container">Arequipa
<input type="checkbox" name="ciudad[]" value="Arequipa">
<span class="checkmark"></span>
</label>

<label class="container">Colca Canyon
<input type="checkbox" name="ciudad[]" value="ColcaCanyon">
<span class="checkmark"></span>
</label>

<label class="container">Nazca Paracas
<input type="checkbox" name="ciudad[]" value="NazcaParacas">
<span class="checkmark"></span>
</label>

<label class="container">Puerto Maldonado / Amazon
<input type="checkbox" name="ciudad[]" value="Amazon">
<span class="checkmark"></span>
</label>

<!--==============Valores Hidden==============-->
<input name="name" type="hidden" value="<?php echo $name;?>">
<input name="lastname" type="hidden" value="<?php echo $lastname;?>">
<input name="email" type="hidden" value="<?php echo $email;?>">
<input name="arrive" type="hidden" value="<?php echo $arrive;?>">
<input name="depart" type="hidden" value="<?php echo $depart;?>">

</div>
<div class="boton">
  <input class="form-control" type="submit" value="NEXT">
</div>

</form>

</body>
