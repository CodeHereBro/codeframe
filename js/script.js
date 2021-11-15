function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

var MenuItems = document.getElementById("MenuItems");
var box = document.getElementById("down");
const mq = window.matchMedia( "(min-width: 500px)" );
const flag = false;

MenuItems.style.maxHeight = "0px";
function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "300px"        
        box.style.marginTop = "12rem";
        flag = true;
    }
    else {
        MenuItems.style.maxHeight = "0px"
        
        box.style.marginTop = "0rem";
        flag = false;
    }
}
const mqLarge  = window.matchMedia( '(max-width: 600px)' );

function marginResize(){
    
    if(mqLarge.matches == false){
        box.style.marginTop = "0rem";
        MenuItems.style.maxHeight = "0px"
    }
}
setInterval(marginResize, 1000);