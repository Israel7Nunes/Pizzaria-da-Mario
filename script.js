// const abrirPopUp = document.getElementById('abrirPopUp');
// const fecharPopUp = document.getElementById('fecharPopUp');
// const popup = document.getElementById('popup');

// abrirPopUp.addEventListener('click', function() {
//     popup.style.display = 'block';
// });

// fecharPopUp.addEventListener('click', function() {
//     popup.style.display = 'none';
// });


var show = document.getElementById('bAparecer');
var form = document.getElementById('formulario');

form.value = 0;


function aparecer() {
    if(form.value === 0) {
        form.classList.remove('hidden');

        form.value = 1;
    }

    else{
        print("lmao");
    }
}