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