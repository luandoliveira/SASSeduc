@extends('templates.navtemplate')
@section('content')
<div id= cabecalho><h4>Administrativo</h4></div>
<!-- ---------------------------CARDS ------------------------------------- -->
<div class="row" id="cards" style="margin-bottom: 80px;">
    <div class="card oneCard">
        <h2 class="text-center">1.550.200</h2>
        <p class="text-center">Total de Produtos</p>
    </div>
    <div class="card twoCard">
        <h2 class="text-center">5.3 millhões</h2>
        <p class="text-center">Número de Registros</p>
    </div>
    <div class="card threeCard">
        <h2 class="text-center">31/08/2021</h2>
        <p class="text-center">Última Atualização</p>
    </div>
</div>
<!-- --------------------------Graficos Charts -------------------------------------- -->
<div>
<div class="row">
<div  class="col-md-2"></div>
<div>
    <canvas id="myChart5"></canvas>
</div>
<div style="display:inline-block;" class="col-md-5">
    <canvas id="myChart2"></canvas>
</div>
<div  class="col-md-2"></div>
<!-- <div>
    <canvas id="myChart3"></canvas>
</div> -->
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
            backgroundColor: [' #00CED1', ' #20B2AA', '#008080'],
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
            backgroundColor: ['#F39C12'],
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
            backgroundColor: [' #00CED1', ' #20B2AA', '#008080'],
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
            backgroundColor: [' #00b050', ' #007bff', '#008080'],
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
            backgroundColor: [' #00b050', ' #007bff', '#F39C12'],
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
<!-- -------------------------------------STILOS CSS --------------------------------------------------- -->
<style>
body {
    /* font-family: "Poppins", sans-serif; */
    background-color: #FAFAFA;
}
.row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 0px;
    margin-left: 0px;
}
.card {
    border-radius: 5px;
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
    color: #A3A5AE;
    font-size: 16px;
}
.image {
    float: right;
    max-width: 64px;
    max-height: 64px;
}
.oneCard {
    border-left: 120px solid #00C0EF;
}
.twoCard {
    border-left: 120px solid #F39C12;
}
.threeCard {
    border-left: 120px solid #00A65A;
}
#cabecalho{
 padding-top:15px;
 padding-bottom:15px;
 background-color:#00b050;
 color:#fff;
 padding-left:45%;
 padding-right:50%;
}
div.myChart5{
        display: inline-block;
}
div.myChart2{
        display: inline-block;
}
@media (max-width: 767px) {
    #cabecalho{
 padding-top:15px;
 padding-bottom:15px;
 background-color:#00b050;
 color:#fff;
 padding-left:30%;
}
}
</style>
@endsection