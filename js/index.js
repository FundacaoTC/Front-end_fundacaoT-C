//Pega o botão
let mybutton = document.getElementById("btn-top");

// Quando o scroll do usuario abaixar 20pixels do topo do documento, revele o botão
window.onscroll = function () {  scrollFunction();};

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// Quando o usuario clicar no botão, mandar o scroll para o topo do documento
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0; // Para funcionar no Safari
  document.documentElement.scrollTop = 0; //Para funcionar no Chrome, Firefox, IE e Opera
}