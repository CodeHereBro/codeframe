var MenuItems = document.getElementById("MenuItems");
var box = document.getElementById("down");

MenuItems.style.maxHeight = "0px";
function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
        box.style.marginTop = "15rem";
    }
    else {
        MenuItems.style.maxHeight = "0px";
        box.style.marginTop = "0rem";
    }
}
var m2Large = window.matchMedia('(max-width: 600px)');

function marginResize() {

    if (m2Large.matches == false) {
        box.style.marginTop = "0rem";
        MenuItems.style.maxHeight = "0px";
    }
}
setInterval(marginResize, 1000);