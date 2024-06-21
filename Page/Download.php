<!DOCTYPE html>
<html>
<head>
<?php include("images.php"); ?>
<?php   $x = count($images)-$_GET["ID"] ;
        $x = $x- 1;
?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
        
        <?php echo $images[$x]["Title"];?>
    
    </title>	  <link rel="icon" type="image/x-icon" href="../../Page/Jdropp.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../CSS/Css.css'>
    
</head>
<body>
    <p class=kop>
        <a href="../Home.php">Jdropp</a>
        <span>
            <a href="../Home.php">Home</a> &#8226; 
            <a href="../About.html">About me</a> &#8226; 
            <a href="..//Licensing.html">Licensing</a>

    </span>

    </p>

</div>

<a href="../../Images/<?php echo str_replace("\\ "," ",$images[$x]["Link"]); ?>"target="_blank">
<div class="shader"><img class="sizer" src="../../Images//<?php echo str_replace("\\ "," ",$images[$x]["Link"]); ?>"></div>
</a>

<div class= "textbox" style="padding-left: 0vw;"> 
    <a href="../Home.php"><button class="filter">Go back</button></a><br>
    <p id="title" style="font-size: 35px;">
    </p>

    <?php echo $images[$x]["Year"];?>
    
    <br><br>&#169; Jesse van der Veen 2022 – All images licenced under a CC-BY-NC-SA 4.0 licence. Please read the <a style="text-decoration: underline;" href="../Licensing.html">licensing</a> before downloading.<br><br>
    <span style="font-size: 35; margin-left: 0%;"><a id="downloadtitle" href="../../Images/<?php echo str_replace("\\ "," ",$images[$x]["Link"]); ?>" target="_blank" download><button class="filter">Download</button></a><br><span>

    <br><br><?php
        $randomN = (rand(1,count($images))-1);
        $randomlink = "../Download.php/Image?ID=".$randomN;

        echo '<a style="text-decoration: underline;" href="'.$randomlink.'"> Random page</a><br>'
        ?>

        <script src="../Images.js"></script>

</body>
</html>