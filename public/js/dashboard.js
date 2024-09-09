
// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén el contexto del elemento canvas donde se dibujará el gráfico
    var ctx = document.getElementById('myPieChart').getContext('2d');
    
    // Datos para el gráfico
    var data = {
        datasets: [{
            labels: ['Oficiales','Jun Tai In', 'Shonembu'],
            data: [30, 30, 17],
            backgroundColor: [
                'rgb(29, 98, 35)',
                'rgb(238, 29, 51)',
                'rgb(33, 152, 42)'
            ],
            borderWidth: 0
        }]
    };
    
    // Opciones para el gráfico
    var options = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: false,
                text: 'Miembros'
            }
        }
    };
    
    // Crear el gráfico
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options,
    });
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén el contexto del elemento canvas donde se dibujará el gráfico
    var ctx = document.getElementById('mySecondChart').getContext('2d');
    
    // Datos para el gráfico
    var data = {
        datasets: [{
            labels: ['Oficiales','Jun Tai In', 'Shonembu'],
            data: [20,20,10,27],
            backgroundColor: [
                'rgb(29, 98, 35)',
                'rgb(238, 29, 51)',
                'rgb(33, 152, 42)',
                'rgb(254, 255, 127)'
            ],
            borderWidth: 0
        }]
    };
    
    // Opciones para el gráfico
    var options = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: false,
                text: 'Miembros'
            }
        }
    };
    
    // Crear el gráfico
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: options,
    });
});

function red(url){
    
}