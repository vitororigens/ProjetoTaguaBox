//retorna o dia atual.
var today = new Date();
var dy = today.getDate();
var mt = today.getMonth();
var yr = today.getFullYear();
document.getElementById('data').value = dy + "-" + mt + "-" + yr;

//dropdown do usuario

function navUser() {
    if (document.getElementById('mostrarUser').style.display == 'none') {
        document.getElementById('mostrarUser').style.display = 'block'
    } else {
        document.getElementById("mostrarUser").style.display = 'none'
    }
}