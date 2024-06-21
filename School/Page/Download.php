<!DOCTYPE html>
<html>
<head>
<?php include("files.php"); ?>
<?php   $x = count($files)-$_GET["ID"] ;
        $x = $x- 1;
?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
        
        <?php echo $files[$x]["Title"];?>
    
    </title>	  <link rel="icon" type="image/x-icon" href="../../Page/Jdropp.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../../CSS/Css.css'>
    
</head>
<body>
    <p class=kop>
        <a href="../Home.php">Portfolio</a>
        <span>
            <a href="../Home.php">Home</a> &#8226; 
            <a href="../About.html">About me</a> &#8226; 
            <a href="..//Licensing.html">Licensing</a>

    </span>

    </p>

</div>

<a href="../../Files/<?php echo str_replace("\\ "," ",$files[$x]["Link"]  .".png"); ?>"target="_blank">
<div class="shader"><img class="sizer" src="../../Files//<?php echo str_replace("\\ "," ",$files[$x]["Link"]  .".png"); ?>"></div>
</a>

<div class= "textbox" style="padding-left: 0vw;"> 
    <a href="../Home.php"><button class="filter">Terug</button></a><br>
    <p id="title" style="font-size: 35px;">
    </p>

    <?php include ("../Files/".  $files[$x]["Link"]  .".html") ?> 
    
    <br><br>
    <span style="font-size: 35; margin-left: 0%;"><a id="downloadtitle" href="../../Files/<?php echo str_replace("\\ "," ",$files[$x]["Link"]  .".zip"); ?>" target="_blank" download><button class="filter">Download Bestanden</button></a><br><span>

    <br><br>

        <script src="../Images.js"></script>

</body>
</html>