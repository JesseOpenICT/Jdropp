<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Portfolio Jesse</title>
  <link rel="icon" type="image/x-icon" href="Jdropp.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../CSS/Css.css'>
    <?php include("files.php"); ?>

</head>
<body>
    <p class=kop>
        <a href="Home.php">Portfolio</a>
        <span>
            <a href="Home.php">Home</a> &#8226; 
            <a href="About.html">About me</a> &#8226; 
            <a href="Licensing.html">Licensing</a>

    </span>

    </p>

    <div class=sidebar id="sidebar">
        <br>Filter jaar<br><br>

        <button class="filter" onclick="filterSelection('1')"> 1</button>
        <button class="filter" onclick="filterSelection('2')"> 2</button>
        <button class="filter" onclick="filterSelection('3')"> 3</button>
        <button class="filter" onclick="filterSelection('4')"> 4</button>

        <br><br>
        <button class="filter active" onclick="filterSelection('all')"> no filters</button>
              </div>
        


    <div class=bigbox>
    <br> Return to my <a style="text-decoration: underline;" href="../../Page/Home.php">art portfolio</a>. <br>

<?php
for($x = 0; $x < count($files); $x++) {

$link = "Download.php/Image?ID=".$files[$x]["ID"];
$class = $files[$x]["Year"];
$style = $files[$x]["Link"];
$name = $files[$x]["Title"];

echo '<a href='.  $link  .'>
<div class = "blok all y'.  $class  .'"
style="background-image:url(../Files/'.  $style  .'.png">
<div class="tekst">'. $name .'</div>
</div>
</a>';
}
?>

<br>&#169; Jesse van der Veen 2022
    </div>

<script src="Filter.js"></script>
</body>
</html>

<!--
     
Erdbeer

   |\   /\   /|
   \ \ |  | / /
  __\________/__
 /              \
|    o      o    |
 \              /
  \    \__/    /
    \__    __/
       \__/

-->