//retorna o dia atual.
var today = new Date();
var dy = today.getDate();
var mt = today.getMonth();
var yr = today.getFullYear();
document.getElementById('data').value = dy + "-" + mt + "-" + yr;