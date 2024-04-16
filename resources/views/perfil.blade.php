<!DOCTYPE html>
<html lang="en" class=" bg-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<style type="text/css">
    /*=====================================
reset estilos
no es necesario que copies esto
=====================================*/

    html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        text-size-adjust: 100%;
        line-height: 1.4;
    }


    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        color: #404040;
        font-family: 'Poppins', sans-serif;
    }

    /*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
    .seccion-perfil-usuario .perfil-usuario-body,
    .seccion-perfil-usuario {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;
    }

    .seccion-perfil-usuario .perfil-usuario-header {
        width: 100%;
        display: flex;
        justify-content: center;

        margin-bottom: 1.25rem;
    }

    .seccion-perfil-usuario .perfil-usuario-portada {
        display: block;
        position: relative;
        width: 90%;
        height: 17rem;
        background-image: linear-gradient(45deg, #706f70, #303030);
        border-radius: 0 0 20px 20px;
        /*
background-image: url('http://localhost/multimedia/png/user-portada-3.png');
background-repeat: no-repeat;
background-position: center;
background-size: cover;
*/
    }

    .seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
        position: absolute;
        top: 1rem;
        right: 1rem;
        border: 0;
        border-radius: 8px;
        padding: 12px 25px;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        cursor: pointer;
    }

    .seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
        margin-right: 1rem;
    }

    .seccion-perfil-usuario .perfil-usuario-avatar {
        display: flex;
        width: 180px;
        height: 180px;
        align-items: center;
        justify-content: center;
        border: 7px solid #FFFFFF;
        background-color: #DFE5F2;
        border-radius: 50%;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        position: absolute;
        bottom: -40px;
        left: calc(50% - 90px);
        z-index: 1;
    }

    .seccion-perfil-usuario .perfil-usuario-avatar img {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 50%;
    }


    .seccion-perfil-usuario .perfil-usuario-body {
        width: 70%;
        position: relative;
        max-width: 750px;
    }

    .seccion-perfil-usuario .perfil-usuario-body .titulo {
        display: block;
        width: 100%;
        font-size: 1.75em;
        margin-bottom: 0.5rem;
    }

    .seccion-perfil-usuario .perfil-usuario-body .texto {
        color: #848484;
        font-size: 0.95em;
    }

    .seccion-perfil-usuario .perfil-usuario-footer,
    .seccion-perfil-usuario .perfil-usuario-bio {
        display: flex;
        flex-wrap: wrap;
        padding: 1.5rem 2rem;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        background-color: #fff;
        border-radius: 15px;
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-bio {
        margin-bottom: 1.25rem;
        text-align: center;
    }

    .seccion-perfil-usuario .lista-datos {
        width: 50%;
        list-style: none;
    }

    .seccion-perfil-usuario .lista-datos li {
        padding: 5px 0;
    }

    .seccion-perfil-usuario .lista-datos li>.icono {
        margin-right: 1rem;
        font-size: 1.2rem;
        vertical-align: middle;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: absolute;
        right: calc(0px - 50px - 1rem);
        top: 0;
        display: flex;
        flex-direction: column;
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes {
        border: 0;
        background-color: #fff;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        color: #fff;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        font-size: 1.3rem;
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-top: .5rem;
    }

    .seccion-perfil-usuario .boton-redes.facebook {
        background-color: #5955FF;
    }

    .seccion-perfil-usuario .boton-redes.twitter {
        background-color: #35E1BF;
    }

    .seccion-perfil-usuario .boton-redes.instagram {
        background: linear-gradient(45deg, #FF2DFD, #40A7FF);
    }

    /* adactacion a dispositivos */
    @media (max-width: 750px) {
        .seccion-perfil-usuario .lista-datos {
            width: 100%;
        }

        .seccion-perfil-usuario .perfil-usuario-portada,
        .seccion-perfil-usuario .perfil-usuario-body {
            width: 95%;
        }

        .seccion-perfil-usuario .redes-sociales {
            position: relative;
            flex-direction: row;
            width: 100%;
            left: 0;
            text-align: center;
            margin-top: 1rem;
            margin-bottom: 1rem;
            align-items: center;
            justify-content: center
        }

        .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
            margin-left: 1rem;
            margin-top: 0;
        }
    }
</style>

<body>
    <section class="seccion-perfil-usuario bg-dark">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="{{ asset('Images/avatar.jpg') }}" alt="img-avatar">
                </div>
            </div>
        </div>
        <div class="perfil-usuario-body bg-light rounded-3">
            <div class="perfil-usuario-bio bg-light">
                <h3 class="titulo">{{ $user->name }}</h3>
                <h3 class="titulo">{{ $user->email }}</h3>
                <h3 class="titulo">
                    @if ($user->estado = 1)
                        Administrador
                    @else
                        <a class=" text-decoration-none" href="{{ route('talleres.index-create') }}">Registra tu
                            taller</a>
                    @endif
            </div>
            <div class="perfil-usuario-footer d-flex justify-content-end bg-light">
                <a class=" btn btn-danger " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="{{ route('garegemet') }}" class=" btn btn-secondary ms-3">
                    inicio
                </a>

            </div>


        </div>
    </section>
</body>

</html>
