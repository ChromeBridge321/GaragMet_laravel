<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <header>
        <div class="icon__menu">
            <i id="btn_open"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#ffffff"
                    viewBox="0 0 256 256">
                    <path
                        d="M224,120v16a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a8,8,0,0,1,8-8H216A8,8,0,0,1,224,120Zm-8,56H40a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V184A8,8,0,0,0,216,176Zm0-128H40a8,8,0,0,0-8,8V72a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V56A8,8,0,0,0,216,48Z">
                    </path>
                </svg></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff"
                    viewBox="0 0 256 256">
                    <path
                        d="M247.43,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A8.13,8.13,0,0,0,247.43,117ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208ZM24,136V72H168v64Zm160,72a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm0-96V88h34.58l9.6,24Z">
                    </path>
                </svg></i>
            <h4 class="m-0">GarageMet</h4>
        </div>

        <div class="options__menu">

            <a href="{{ route('home') }}" >
                <div class="option">
                    <i><img src="{{ asset('images/reportes_off.svg') }}" alt=""></i>
                    <h4>Reportes</h4>
                </div>
            </a>

            <a href="{{ route('citas') }} " class="selected">
                <div class="option">
                    <i><img src="{{ asset('images/cita_on.svg') }}" alt=""></i>
                    <h4>Citas</h4>
                </div>
            </a>

            <a href="{{ route('empleados') }}">
                <div class="option">
                    <i><img src="{{ asset('images/empleados_off.svg') }}" alt=""></i>
                    <h4>Empleados</h4>
                </div>
            </a>

            <a href="{{ route('clientes') }}">
                <div class="option">
                    <i><img src="{{ asset('images/clientes_off.svg') }}" alt=""></i>
                    <h4>Clientes</h4>
                </div>
            </a>

            <a href="{{ route('historial') }}">
                <div class="option">
                    <i><img src="{{ asset('images/historial.svg') }}" alt=""></i>
                    <h4>Historial</h4>
                </div>
            </a>

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


            <a href="{{ route('garegemet') }}">
                home
            </a>

        </div>

    </div>

    <div class=" container-fluid p-5">
        <div class="row col-12 d-flex justify-content-center">
            <div class="row d-flex justify-content-end">
                <div class="pt-3 mt-3">
                    @if (session('correcto'))
                        <div class="alert bg-success text-white " role="alert">
                            Datos guardados correctamente
                        </div>
                    @endif

                    @if (session('incorrecto'))
                        <div class="alert bg-danger text-white " role="alert">
                            Los datos no se han podido guardar
                        </div>
                    @endif

                    @if (session('editrue'))
                        <div class="alert bg-success text-white " role="alert">
                            Datos actualizados correctamente
                        </div>
                    @endif

                    @if (session('editfalse'))
                        <div class="alert bg-danger text-white " role="alert">
                            Datos no actualizados correctamente
                        </div>
                    @endif

                    @if (session('deletetrue'))
                        <div class="alert bg-success text-white " role="alert">
                            Empleado ha sido eliminado correctamente
                        </div>
                    @endif

                    @if (session('deletefalse'))
                        <div class="alert bg-danger text-white " role="alert">
                            Empleado no ha sido eliminado correctamente
                        </div>
                    @endif

                    <script>
                        var res = function() {

                            var not = confirm("estas seguro que quieres eliminar el registro?");
                            return not;

                        }
                    </script>

                </div>
            </div>
            <div class="col-12 mt-2 table-responsive">
                <table class="table table-dark table-responsive ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Fecha de la cita</th>
                            <th class=" text-center" scope="col">Estado de la cita</th>
                            <th scope="col">Accion</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($citas as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->fecha_cita }}</td>
                                @if ($item->estado == 1)
                                    <td class=" bg-success text-center">Activo</td>
                                @else
                                    <td class=" bg-danger text-center">Inactivo</td>
                                @endif
                                <th><button data-bs-toggle="modal" data-bs-target="#ModalEditar{{ $item->id }}"
                                        type="button" class="btn btn-primary">Editar</button>
                                </th>
                            </tr>
                            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="ModalEditar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-dark">
        <div class="col-12 d-flex flex-column w-100">
            <label for=""
                class="form-label text-bg-dark">ID</label>
            <input type="text" class="w-100 form-check-input"
                name="Nombre" readonly value="{{ $item->id }}">
        </div>

        <div class="col-12 d-flex flex-column w-100">
            <label for=""
                class="form-label text-bg-dark">Nombre del Cliente</label>
            <input type="text" class="w-100 form-check-input"
                name="Nombre" readonly value="{{ $item->name }}">
        </div>

        <div class="col-12 d-flex flex-column w-100">
            <label for=""
                class="form-label text-bg-dark">Fecha de la CIta</label>
            <input type="text" class="w-100 form-check-input"
                name="Nombre" readonly value="{{ $item->fecha_cita }}">
        </div>
        <div class="col-12 d-flex flex-column">
            <label for="" class=" form-label">Estado</label>
<select name="" id="">
<option value="1">Activo</option>
<option value="0">Inactivo</option>
</select>
        </div>
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
    <script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
