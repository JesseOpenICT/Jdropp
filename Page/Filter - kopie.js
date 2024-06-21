filterSelection("all")

function filterSelection(fi) {
  var blocks, i;
  blocks = document.getElementsByClassName("blok");     //each block
  if (fi == "all") fi = "";                         //removes filter on all filter
  for (i = 0; i < blocks.length; i++) {         //repeat for each block
    w3RemoveClass(blocks[i], "show");
    if (blocks[i].className.indexOf(fi) > -1) w3AddClass(blocks[i], "show");
  }
}
// * fi = naam ingevoerd filter (bv 'red')
// * blocks = alle blokken
// * als fi=all dan is fi " "
// * herhaal voor elke block;
// * verwijder "show" van huidige block (blocks[i]) door w3RemoveClass te runnen
// * als (blocks[i]) het filter heeft, run w3AddClass


function w3AddClass(element, name) {      //element is (blocks[i]) weer, name is VGM "show"
  element.className += " show";
//  var i, arr1, arr2;
//  arr1 = element.className.split(" ");      //verandert "red blue" in [red, blue]
//  arr2 = name.split(" ");
//  for (i = 0; i < arr2.length; i++) {
//    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}    //zoekt door arr1 naar arr2. Als deze er niet is, return true
  //}
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {     //dat is gewoon "show" dus eenmaal
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("sidebar");
var btns = btnContainer.getElementsByClassName("filter");
var allfi = document.getElementsByClassName("allfi");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");

    var arr = this.className.split(" ");

    if (arr.indexOf('active') == -1){
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";

    } else {
      this.className = this.className.replace(" active", "");
      filterSelection("all");
      allfi[0].className += " active";
    }
    
//    current[0].className = current[0].className.replace(" active", "");
//    this.className += " active";
  });
}
