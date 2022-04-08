<head>
    <link rel="shortcut icon" href="favicon.gif">
  </head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comparativo ventas Z 2020-2021') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels);?>,
        datasets: [{
            label: '2020',
            data: <?php echo json_encode($data2020);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        },{
            label: '2021',
            data: <?php echo json_encode($data2021);?>,
            backgroundColor: [

                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [

                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Comparativo ventas'
            },
            subtitle: {
                display: true,
                text: '2020-2021'
            },
                    legend: {
                display: true,
                position: 'right',
                align: 'centre',
        }
        },

        animations: {
      tension: {
        duration: 500,
        easing: 'linear',
        from: 0.5,
        to: 0,
        loop: false
      }
    },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</x-app-layout>
