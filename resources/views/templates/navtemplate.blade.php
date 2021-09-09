<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap" rel="stylesheet"/>
    <title>Dashboard</title>
</head>

<body>
    <div id="wrapper">

        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <h2>Logo</h2>
            </div>
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="#"><i class="fa fa-home"></i>Inicio</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-plug"></i>Cadastrar</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Sair</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
            </ul>
        </aside>

        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')

    </div>
</body>

<style>
body {
    padding-bottom: 30px;
    position: relative;
    min-height: 100%;
}

a {
    transition: background 0.2s, color 0.2s;
}

a:hover,
a:focus {
    text-decoration: none;
}

#wrapper {
    padding-left: 0;
    transition: all 0.5s ease;
    position: relative;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #2F4F4F;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

.sidebar-brand {
    position: absolute;
    top: 0;
    width: 250px;
    text-align: center;
    padding: 20px 0;
}

.sidebar-brand h2 {
    margin: 0;
    font-weight: 600;
    font-size: 24px;
    color: #fff;
}

.sidebar-nav {
    position: absolute;
    top: 75px;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav>li {
    text-indent: 10px;
    line-height: 42px;
}

.sidebar-nav>li a {
    display: block;
    text-decoration: none;
    color: #757575;
    font-weight: 600;
    font-size: 18px;
}

.sidebar-nav>li>a:hover,
.sidebar-nav>li.active>a {
    text-decoration: none;
    color: #fff;
    background: #F8BE12;
}

.sidebar-nav>li>a i.fa {
    font-size: 24px;
    width: 60px;
}

#navbar-wrapper {
    width: 100%;
    position: absolute;
    z-index: 2;
}

#wrapper.toggled #navbar-wrapper {
    position: absolute;
    margin-right: -250px;
}

#navbar-wrapper .navbar {
    border-width: 0 0 0 0;
    background-color: #008B8B;
    font-size: 24px;
    margin-bottom: 0;
    border-radius: 0;
}

#navbar-wrapper .navbar a {
    color: #757575;
}

#navbar-wrapper .navbar a:hover {
    color: #2F4F4F;
}

#content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
    top: 100px;
}

#wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 60px;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 60px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -190px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -190px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 60px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 60px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    #wrapper {
        padding-left: 60px;
    }

    #sidebar-wrapper {
        width: 60px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 250px;
    }
}

@media (max-width: 767px) {
    #wrapper {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #navbar-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #wrapper.toggled #content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    #navbar-wrapper {
        position: relative;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #content-wrapper {
        position: relative;
        top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
        position: relative;
        margin-right: 250px;
    }
}
</style>

<script>
const $button = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
});
</script>

</html>