<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jdropp</title>
  <link rel="icon" type="image/x-icon" href="Jdropp.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../CSS/Css.css'>
    <?php include("images.php"); ?>

</head>
<body>
    <p class=kop>
        <a href="Home.php">Jdropp</a>
        <span>
            <a href="Home.php">Home</a> &#8226; 
            <a href="About.html">About me</a> &#8226; 
            <a href="Licensing.html">Licensing</a>

    </span>

    </p>

    <div class=sidebar id="sidebar">
        <br>Filter colors<br><br>

        <button class="filter" style="color: #ff1111;" onclick="filterSelection('red')"> red</button>
        <button class="filter" style="color: #ff8400;" onclick="filterSelection('orange')"> orange</button>
        <button class="filter" style="color: #ffdd00;" onclick="filterSelection('gold')"> gold</button>
        <button class="filter" style="color: #00ff00;" onclick="filterSelection('green')"> green</button>
        <button class="filter" style="color: #00aaff;" onclick="filterSelection('blue')"> blue</button>
        <button class="filter" style="color: #c247ff;" onclick="filterSelection('purple')"> purple</button>
        <button class="filter" style="color: #ffffff;" onclick="filterSelection('white')"> white</button>
        <button class="filter" style="color: #bbbbbb;" onclick="filterSelection('gray')"> gray</button>
        <button class="filter" style="color: #909090;" onclick="filterSelection('black')"> black</button>
        <!-- <button class="filter" style="color: #bb9aca;" onclick="filterSelection('mono')"> monochrome</button>     -->
        <button class="filter" style="color: #60ffe2;" onclick="filterSelection('multi')"> varied</button>        

        <br><br>Filter date<br><br>

        <button class="filter" onclick="filterSelection('y2023')"> 2023</button>
        <button class="filter" onclick="filterSelection('y2022')"> 2022</button>
        <button class="filter" onclick="filterSelection('y2021')"> 2021</button>
        <button class="filter" onclick="filterSelection('y2020')"> 2020</button>

        <br><br>
        <button class="filter allfi active" onclick="filterSelection('all')"> no filters</button><br>

        <br>


        <?php
        $randomN = (rand(1,count($images))-1);
        $randomlink = "Download.php/Image?ID=".$randomN;

        echo '<a style="text-decoration: underline;" href="'.$randomlink.'"> Random page</a><br>'
        ?><br>


        </div>      <br><br>
        


    <div class=bigbox>
        <br> Please read the <a style="text-decoration: underline;" href="Licensing.html">licensing</a> before continuing. <br>

<?php
for($x = 0; $x < count($images); $x++) {

$link = "Download.php/Image?ID=".$images[$x]["ID"];
$class = $images[$x]["Year"]." ".$images[$x]["Filters"];
$style = $images[$x]["Link"];

echo '<a href='.  $link  .'>
<div class = "blok all y'.  $class  .'"
style="background-image:url(../ImagesSM/'.  $style  .'">
</div></a>';
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