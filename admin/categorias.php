<?php
session_start();
//if(!isset($_SESSION['Nombre']) && $_SESSION['admin']==true)
 //   header("location: indexAdmin.php?m=5");
//include "barrra.php";
include "../class/classCategoria.php";
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>

<style>
    .contenedor{
    display: grid;
    grid-template-rows: 60px 60px;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    font-size: 40px;
    color: white;
    }
</style>
<!--
<div class="contenedor">
  <div class="rejilla">Item 1</div>
  <div class="rejilla">Item 2</div>
  <div class="rejilla">Item 3</div>
  <div class="rejilla">Item 4</div>
  <div class="rejilla">Item 5</div>
  <div class="rejilla">Item 6</div>
  <div class="rejilla">Item 7</div>
  <div class="rejilla">Item 8</div>
  <div class="rejilla">Item 9</div>
  <div class="rejilla">Item 10</div>
  <div class="rejilla">Item 11</div>
  <div class="rejilla">Item 12</div>
</div>

<div class="container" style="color:white; font-size:2.5em;">
	<div class="row">
  <div class="col-md-4">Item 1</div>
  <div class="col-md-4">Item 2</div>
  <div class="col-md-4">Item 3</div>
  <div class="col-md-4">Item 4</div>
  <div class="col-md-4">Item 5</div>
  <div class="col-md-4">Item 6</div>
  <div class="col-md-4">Item 7</div>
  <div class="col-md-4">Item 8</div>
  <div class="col-md-4">Item 9</div>
  <div class="col-md-4">Item 10</div>
  <div class="col-md-4">Item 11</div>
  <div class="col-md-4">Item 12</div>
</div>
</div>

<style type="text/css">
	#cuadricula {
  display: grid;
  grid-template-columns:1fr 1fr 1fr;
  grid-gap:0.5em;
  /* border:5px dashed #777;*/
  height:150px
}

.item {
  padding:1em;
  border: 1px solid #000;
  border-radius: 10px;
  background-color: #3E989B;
  background-color: var(--color);
}
</style>
<div >
<div class="container-fluid" id="cuadricula">
<div class="item" style="--color:#3E989B;"><p>1</p></div>
<div class="item" style="--color:#6DB465;"><p>2</p></div>
<div class="item" style="--color:#F2C14E;"><p>3</p></div>
<div class="item" style="--color:#F78154;"><p>4</p></div>
<div class="item" style="--color:#C87694;"><p>5</p></div>
</div>
</div>
<br><br>
<div class="container">
<table class="table table-hover table-striped  text-white">
	<tr><td class="col-md-2">item 1</td><td class="col-md-2" >item 2</td><td>item 3</td></tr>
	<tr><td class="col-md-2">item 4</td><td class="col-md-2" >item 5</td><td>item 6</td></tr>
	<tr><td class="col-md-2">item 7</td><td class="col-md-2" >item 8</td><td>item 9</td></tr>
</table>
</div>


</head>
<body>
-->

</body>
</html>