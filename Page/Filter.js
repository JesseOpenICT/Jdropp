filterSelection("all")
var filters = "all";

function filterSelection(fi) {
  var blocks, i, ii;
  blocks = document.getElementsByClassName("blok");     //each block
  if (fi == "all") {
    filters = "all";  
  } else {
    if (filters.indexOf(fi) == -1){
      filters = filters + " " + fi;
    } else {
      filters = filters.replace(fi, "");
    }
  } //definieert filters als "all" + alle geselecteerde filters. Als je een filter tweemaal selecteerd staat ie weer uit.
  
  for (i = 0; i < blocks.length; i++) {         //repeat for each block
    w3RemoveClass(blocks[i], "show");           //remove the block
    arr = filters.split(" ");
    filtercount = 0;
      
    for (ii = 0; ii < arr.length; ii++){           //repeat for each filter
      if (blocks[i].className.indexOf(arr[ii]) > -1){
        filtercount = filtercount + 1;
      }
    }

    if (arr.length == filtercount) w3AddClass(blocks[i], "show");
  } 
}



function w3AddClass(element, name) {      //element is (blocks[i]) weer, name is VGM "show"
  element.className += " show";
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
    var current = document.getElementsByClassName("filter");
    var arr = this.className.split(" ");

    if (arr.indexOf('active') == -1){
      if (arr.indexOf('allfi') == -1){
      allfi[0].className = allfi[0].className.replace(" active", "");
      } else { for (i = 0; i < btns.length; i++){
          current[i].className = current[i].className.replace(" active", "");
        }
      }
      this.className += " active";

    } else {
      this.className = this.className.replace(" active", "");
      

      var activefiltercount = 0;
      for(i = 0; i < btns.length; i++){
        if (btns[i].className.indexOf('active') > -1){
        activefiltercount = 1;
      }}

      if (activefiltercount==0) {
      allfi[0].className += " active";} 
    }
  });
}
