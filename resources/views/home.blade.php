@extends('templates.navtemplate')

@section('content')
<div class="row">
    <div class="card green">
        <h2 class="text-center">1.550.200</h2>
        <p class="text-center">Total de Produtos</p>
    </div>

    <div class="card blue">
        <h2 class="text-center">5.3 millhões</h2>
        <p class="text-center">Número de Registros</p>
    </div>

    <div class="card red">
        <h2 class="text-center">31/08/2021</h2>
        <p class="text-center">Última Atualização</p>
    </div>
</div>

<div class=" col-md-6">
    <canvas id="myChart1"></canvas>
</div>
<br>
<div class=" col-md-6">
    <canvas id="myChart3"></canvas>
</div>
<br>
<div class=" col-md-6">
    <canvas id="myChart2"></canvas>
</div>
<br>
<div class=" col-md-3">
    <canvas id="myChart4"></canvas>
</div>
<div class=" col-md-3">
    <canvas id="myChart5"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Teclado', 'Mouse', 'Monitor'],
        datasets: [{
            label: 'Produtos em Estoque',
            backgroundColor: ['	#00CED1', '	#20B2AA', '#008080'],
            data: [10, 20, 30],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        plugins: {
            title: {
                display: true,
                text: 'Tabela de Produtos',
            }
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [10, 20, 30],
        datasets: [{
            label: 'Produtos',
            backgroundColor: ['#00CED1'],
            data: [10, 20, 30],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            xAxes: [],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart3");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Teclado', 'Mouse', 'Monitor'],
        datasets: [{
            label: 'Produtos em Estoque',
            backgroundColor: ['	#00CED1', '	#20B2AA', '#008080'],
            data: [10, 20, 30],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            xAxes: [],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        plugins: {
            title: {
                display: true,
                text: 'Tabela de Produtos',
            }
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart4");
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Teclado', 'Mouse', 'Monitor'],
        datasets: [{
            label: 'Produtos em Estoque',
            backgroundColor: ['	#00CED1', '	#20B2AA', '#008080'],
            data: [10, 20, 30],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart5");
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Teclado', 'Mouse', 'Monitor'],
        datasets: [{
            label: 'Produtos em Estoque',
            backgroundColor: ['#008080', '#20B2AA', '#00CED1'],
            data: [15, 20, 25],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<style>
body {
    font-family: "Poppins", sans-serif;
    background-color: #fafafa;
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 0px;
    margin-left: 0px;

}

.card {
    border-radius: 3px;
    box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
    padding: 30px;
    margin: 20px;
    width: 400px;
    transition: all 0.3s ease-out;
}

.card:hover {
    transform: translateY(-5px);
    cursor: pointer;
}

.card p {
    color: #a3a5ae;
    font-size: 16px;
}

.image {
    float: right;
    max-width: 64px;
    max-height: 64px;
}

.blue {
    border-left: 2px solid #008080;
}

.green {
    border-left: 2px solid #008080;
}

.red {
    border-left: 2px solid #008080;
}
</style>

@endsection
