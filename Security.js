function bloquearTeclas(e){(123===e.keyCode||e.ctrlKey&&85===e.keyCode)&&(e.preventDefault(),alert("Ops: tente novamente mais tarde!"))}function bloquearAtalhosTeclado(e){(e.ctrlKey&&e.shiftKey&&73===e.keyCode||e.ctrlKey&&85===e.keyCode)&&(e.preventDefault(),alert("Ops: tente novamente mais tarde!"))}document.addEventListener("keydown",bloquearTeclas),window.onload=function(){document.oncontextmenu=function(){return alert("Ops: tente novamente mais tarde!"),!1}},document.addEventListener("keydown",bloquearAtalhosTeclado);