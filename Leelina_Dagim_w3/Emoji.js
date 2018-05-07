
document.body.onload = themeTitle;

function themeTitle() {
    var div = document.createElement("div");
    var content = document.createTextNode("Choose a Theme!");
    div.appendChild(content);
    var oldDiv = document.getElementById(".next");
    document.body.insertAfter(oldDiv, div);
}

function Next() {
    var button = document.createElement("html");
    document.body.appendChild(button);
}

document.getElementById("basic_btn").onclick = function () {
    document.getElementById("theme").href = "basic_theme.css";
}

document.getElementById("cute_btn").onclick = function () { 
    document.getElementById("theme").href = "Emoji.css";
};

document.getElementById("dark_btn").onclick = function () { 
    document.getElementById("theme").href = "dark_theme.css";
 };

document.getElementById("emoji_btn").onclick = function () { 
    document.getElementById("theme").href = "emoji_theme.css";
};

var modal = document.getElementById("modal");
var menu2 = document.getElementById("menu2");
var exit = document.getElementsByClassName("exit")[0];

menu2.addEventListener("click", openModal);
exit.addEventListener("click", closeModal);
window.addEventListener("click", clickOutside);

function openModal(){
    modal.style.display = "block";
}

function closeModal(){
    modal.style.display = "none";
}

function clickOutside(e){
    if(e.target == modal){
       modal.style.display = "none"; 
    }  
}