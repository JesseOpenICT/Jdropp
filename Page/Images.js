let titlename = document.title;
document.getElementById("title").innerText = titlename;
titlename.replace(",","");
// let downloadbutton = document.getElementById("downloadtitle");
// downloadbutton.setAttribute('download',titlename);

    var myImg = new Image();
    myImg.src = '../../Images/Draconic\ Dusk.png';

//    var imgw, imgh;

    imgw = myImg.width;
    imgh = myImg.height;

    if (imgh == 0){ //fallback
    imgw = 7;
    imgh = 5;
    document.getElementById("preview").innerText = "!  Image proportions are incorrectly loaded. You can fix this by reloading the page.";
}

    var vieww = window.innerWidth;


    if (vieww < 670){
    document.getElementById("preview").style.height = "calc(97vw/"+imgw+"*"+imgh+")";
}
else {
    document.getElementById("preview").style.height = "calc(50vw/"+imgw+"*"+imgh+")";
}

addEventListener('resize', (event) => {});

onresize = (event) => {
var vieww = window.innerWidth;
if (vieww <= 670){
    document.getElementById("preview").style.height = "calc(97vw/"+imgw+"*"+imgh+")";
}
else {
    document.getElementById("preview").style.height = "calc(50vw/"+imgw+"*"+imgh+")";
}

addEventListener('resize', (event) => {});
};