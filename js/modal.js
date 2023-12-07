var modal = document.getElementById("myModal");


var przyciski = document.getElementsByClassName("przycisk");
var modalImg = document.getElementById("img01");

for(let i=0;i<przyciski.length;i++) {
przyciski[i].onclick = function(){
modal.style.display = "block";
modalImg.src = "grafika/"+this.getAttribute("data-zdj-sklady");
}

}

var exit = document.getElementById("close");

exit.onclick = function() {
modal.style.display = "none";
} 