@extends('templates.navtemplate')
@section('content')

<body>

@if ($showUser || $showProjeto || $showProcesso || $showCronograma)

<!-- ---------------------------CARDS ------------------------------------- -->
<div class="row" id="cards" style="margin-bottom: 80px;">
    <div class="card oneCard">
        <h2 class="text-center">20</h2>
        <p class="text-center">Total de Projetos</p>
    </div>
    <div class="card twoCard">
        <h2 class="text-center">20</h2>
        <p class="text-center">Número de Processos</p>
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
<div class="col-md"></div>
<div style="display:inline-block;" class="col-md-5">
    <canvas id="myChart2"></canvas>
</div>
<div  class="col-md-2"></div>
<!-- <div>
    <canvas id="myChart3"></canvas>
</div> -->
</div>
@else
<!-- ---------------------------CARDS ------------------------------------- -->
<main>
  <div class="lp">
    <nav class="lp__nav">
      <p class="lp__nav__text">BEM - VINDO! </p>
    </nav>
    <section class="lp__body">
    <!--- START: TEXT --->
    <div class="lp__text">
      <h1 class="lp__text__title"><span class="lp__text__title-first">Olá,</span>
      {{auth()->user()->name}}.</h1>
      <p class="lp__text__subtext">Seu perfil ainda não possui permissões dentro do sistema. Por favor, contate o administrador.</p>
    </div>
    <!--- END: TEXT --->
    <!--- START: IMG --->
    <div class="lp__mainImg">
      <img src="{{asset('img/home.png')}}" class="product__item__image">
    </div>
    <!--- END: IMG --->
    </section>
  </div>
</main>
<style>
    * {
  font-family: sans-serif;
}
body {
  /*background: #FAFAFA;*/
  background: #ECF4FA;
  /* height: 100vh; */
  /* padding: 0px 30px; */
  margin: 0;
  /* display: flex; */
  /* flex-direction: column; */
  justify-content: center;
}
.lp {
  background: #fff;
  box-shadow: 0px 0px 16px 1px rgba(0,0,0,0.4);
  border-radius: 8px;
  max-width: 680px;
  height: 400px;
  margin: auto;
  padding: 32px 32px 8px 32px;
  overflow: hidden;
  margin-top:200px;
}
.lp__body {
  display: flex;
}
/*NAV*/
.lp__nav {
  width: max-content;
  display: flex;
  align-items: center;
}
.lp__nav__logo {
  width: 20px;
  margin: -1px 0 0;
  padding: 0 4px 0 0;
}
.lp__nav__text {
  font-weight: 600;
  font-size: 18px;
}
/*MAIN TEXT*/
.lp__text {
  min-width: 200px;
  padding: 0 0 25px;
  align-self: flex-end;
}
.lp__text__title {
  font-size: 32px;
  /* text-decoration: underline; */
  margin: 0;
}
.lp__text__title-first {
  display: block;
}
.lp__text__subtext {
  font-size: 20px;
  line-height: 1.75;
  margin: 16px 0;
}
/*MAIN IMAGE*/
.product__item__image{
width: 148px;
  height: auto;
  display: block;
  margin: 0 auto;
}
</style>
@endif
</body>
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