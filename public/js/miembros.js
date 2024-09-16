document.getElementById('btn-cerrar').addEventListener('click',function() {
    document.getElementById('w-filtros').classList.toggle('mostrar')
})

document.getElementById('filtros').addEventListener('click', function(){
    document.getElementById('w-filtros').classList.toggle('mostrar')
})

cat0 = document.getElementById('cat-0')
cat1 = document.getElementById('cat-1')
cat2 = document.getElementById('cat-2')
cat3 = document.getElementById('cat-3')

cat0.addEventListener('click',function(){
    if(cat0.checked){
        cat1.checked = false
        cat2.checked = false
        cat3.checked = false
    }
})

cat1.addEventListener('click', function(){
    if(cat1.checked){
        cat0.checked = false
    }
})

cat2.addEventListener('click', function(){
    if(cat2.checked){
        cat0.checked = false
    }
})

cat3.addEventListener('click', function(){
    if(cat3.checked){
        cat0.checked = false
    }
})

mod0 = document.getElementById('mod-0')
mod1 = document.getElementById('mod-1')
mod2 = document.getElementById('mod-2')
mod3 = document.getElementById('mod-3')
mod4 = document.getElementById('mod-4')

mod0.addEventListener('click',function(){
    if(mod0.checked){
        mod1.checked = false
        mod2.checked = false
        mod3.checked = false
        mod4.checked = false
    }
})

mod1.addEventListener('click', function(){
    if(mod1.checked){
        mod0.checked = false
    }
})

mod2.addEventListener('click', function(){
    if(mod2.checked){
        mod0.checked = false
    }
})

mod3.addEventListener('click', function(){
    if(mod3.checked){
        mod0.checked = false
    }
})

mod4.addEventListener('click', function(){
    if(mod4.checked){
        mod0.checked = false
    }
})

sem0 = document.getElementById('sem-0')
sem1 = document.getElementById('sem-1')
sem2 = document.getElementById('sem-2')
sem3 = document.getElementById('sem-3')

sem0.addEventListener('click',function(){
    if(sem0.checked){
        sem1.checked = false
        sem2.checked = false
        sem3.checked = false
    }
})

sem1.addEventListener('click', function(){
    if(sem1.checked){
        sem0.checked = false
    }
})

sem2.addEventListener('click', function(){
    if(sem2.checked){
        sem0.checked = false
    }
})

sem3.addEventListener('click', function(){
    if(sem3.checked){
        sem0.checked = false
    }
})

loc0 = document.getElementById('loc-0')
loc1 = document.getElementById('loc-1')
loc2 = document.getElementById('loc-2')
loc3 = document.getElementById('loc-3')
loc4 = document.getElementById('loc-4')

loc0.addEventListener('click',function(){
    if(loc0.checked){
        loc1.checked = false
        loc2.checked = false
        loc3.checked = false
        loc4.checked = false
    }
})

loc1.addEventListener('click', function(){
    if(loc1.checked){
        loc0.checked = false
    }
})

loc2.addEventListener('click', function(){
    if(loc2.checked){
        loc0.checked = false
    }
})

loc3.addEventListener('click', function(){
    if(loc3.checked){
        loc0.checked = false
    }
})

loc4.addEventListener('click', function(){
    if(loc4.checked){
        loc0.checked = false
    }
})

gen0 = document.getElementById('gen-0')
gen1 = document.getElementById('gen-1')
gen2 = document.getElementById('gen-2')

gen0.addEventListener('click',function(){
    if(gen0.checked){
        gen1.checked = false
        gen2.checked = false
    }
})

gen1.addEventListener('click', function(){
    if(gen1.checked){
        gen0.checked = false
    }
})

gen2.addEventListener('click', function(){
    if(gen2.checked){
        gen0.checked = false
    }
})

buttons = document.querySelectorAll('#button-desplegar');

buttons.forEach(function(boton){
    boton.addEventListener('click',function(){
        arrow = boton.querySelector('#arrow_down')
        arrow.classList.toggle('rotar')

        info = boton.closest('.miembro').querySelector('.infoMiembro')
        info.classList.toggle('active')
    })
})
