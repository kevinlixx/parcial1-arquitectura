window.onload = function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: candidatos,
            datasets: [{
                label: 'Número de votos',
                data: votos,
                backgroundColor: '#ffd299', // Cambia el color de fondo
                borderColor: '#8B4513', // Cambia el color del borde
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}