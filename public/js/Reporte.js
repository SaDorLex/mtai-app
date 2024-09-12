

var buttons = document.querySelectorAll('#button-desplegar')

buttons.forEach(function(boton){
    boton.addEventListener('click',function(){
        arrow = boton.querySelector('#arrow')
        arrow.classList.toggle('rotar')

        info = boton.closest('.content-member').querySelector('.info')
        info.classList.toggle('open')
    })
})