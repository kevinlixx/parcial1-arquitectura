window.onload = function () {
    var ctx = document.getElementById('myChart').getContext('2d');

    // Define una lista de colores
    var colors = ['#66be94', '#2f6798', '#f397ca', '#FFFF00', '#00FFFF', '#FF00FF'];

    // Asigna un color de la lista a cada candidato
    var backgroundColors = candidatos.map(function (_, i) {
        return colors[i % colors.length];
    });

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: candidatos,
            datasets: [{
                data: votos,
                backgroundColor: backgroundColors, // Usa los colores de la lista
                /* borderColor: '#8B4513', */
                borderWidth: 1
            }]
        },
        options: {
            responsive: true, // Hace que la gráfica sea responsive
            maintainAspectRatio: false, // Permite que cambies la altura de la gráfica independientemente de su ancho
            plugins: {
                legend: {
                    display: false // Desactivar la leyenda
                },
                // Define la configuración de la herramienta de información sobre herramientas (tooltip)
                tooltip: {
                    callbacks: {
                        // Define la función de devolución de llamada para la etiqueta del tooltip
                        label: function (context) { // En esta linea se define la función de devolución de llamada para la etiqueta del tooltip
                            var label = '';
                            // Verifica si el valor de 'y' está definido
                            if (context.parsed.y !== null) {
                                // Agrega el valor de 'y' seguido de 'voto(s)' a la etiqueta
                                label += context.parsed.y + ' voto(s)';
                            }
                            return label;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        color: 'black' // Cambia el color de los ticks del eje Y a negro
                    }
                },
                x: {
                    ticks: {
                        color: 'black' // Cambia el color de los ticks del eje X a negro
                    }
                }
            }
        },
        plugins: [{
            id: 'custom_canvas_background_color',
            beforeDraw: (chart) => {
                const ctx = chart.canvas.getContext('2d');
                const xAxis = chart.scales['x'];
                const yAxis = chart.scales['y'];
                ctx.strokeStyle = 'black';
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(xAxis.left, yAxis.bottom);
                ctx.lineTo(xAxis.right, yAxis.bottom);
                ctx.stroke();
            }
        }]
    });
}