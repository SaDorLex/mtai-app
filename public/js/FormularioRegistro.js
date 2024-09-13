document.getElementById('custom-button').addEventListener('click', function() {
    document.getElementById('input-file').click();
});

let cropper = null;

$('#input-file').on('change', () =>{
    let image = document.getElementById('img-cropper')
    let input = document.getElementById('input-file')

    let archivos = input.files
    let extensiones = input.value.substring(input.value.lastIndexOf('.'), input.value.lenght)

    if(!archivos || !archivos.length){
        image.src = "";
        input.value = "";
    }else if(input.getAttribute('accept').split(',').indexOf(extensiones) < 0){
        alert('Debes seleccionar una imagen')
        input.value = "";
    }else{
        let imagenUrl = URL.createObjectURL(archivos[0])
        image.src = imagenUrl

        cropper = new Cropper(image,{
            aspectRatio: 1,
            preview: '.img-sample',
            zoomable: false,
            viewMode: 1,
            responsive: false,
            dragMode: 'none',
            ready(){
                document.querySelector('.cropper-container').style.width = '100%'
                document.querySelector('.cropper-container').style.height = '100%'
            }
        })
        $('.modal').addClass('active')
        $('.modal-content').addClass('active')

        $('.modal').removeClass('remove')
        $('.modal-content').removeClass('remove')

    }
})

$('#close').on('click', ()=>{
    let image = document.getElementById('img-cropper')
    let input = document.getElementById('input-file')

    image.src = "";
    input.value = "";

    cropper.destroy()

    $('.modal').addClass('remove')
    $('.modal-content').addClass('remove')

    $('.modal').removeClass('active')
    $('.modal-content').removeClass('active')
})

$('#cut').on('click', () =>{
    let crop_image = document.getElementById('crop-image')
    let canva = cropper.getCroppedCanvas()
    let image = document.getElementById('img-cropper')
    let input = document.getElementById('input-file')

    canva.toBlob(function(blob){
        let url_cut = URL.createObjectURL(blob)
        crop_image.src = url_cut;

        var file = new File([blob],"filename.png", {type: "image/png"});
        
        var dataTransfer = new DataTransfer();
        dataTransfer.items.add(file)

        var fileInput = document.getElementById('input-file')

        fileInput.files = dataTransfer.files;
    })

    cropper.destroy()

    $('.modal').addClass('remove')
    $('.modal-content').addClass('remove')

    $('.modal').removeClass('active')
    $('.modal-content').removeClass('active')
})