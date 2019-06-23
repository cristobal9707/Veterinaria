<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Veterinaria UFRO</title>

    <style>
        #inspire {
            background-color: #f1f2f6;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }

            thead {
                display: none;
            }

            tr:nth-of-type(2n) {
                background-color: inherit;
            }

            tr td:first-child {
                background: #f0f0f0;
                font-weight: bold;
                font-size: 1.3em;
            }

            tbody td {
                display: block;
                text-align: center;
            }

            tbody td:before {
                content: attr(data-th);
                display: block;
                text-align: center;
            }
        }

    </style>
</head>

<body>
    <div id="app">
        <v-app id="inspire">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
                <a class="navbar-brand" href="{{ url('/recetas') }}">VETERINARIA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <a class="navbar-brand" href="{{ url('/clientes') }}">Clientes</a>
                        <a class="navbar-brand" href="{{ url('/mascotas') }}">Mascotas</a>
                        <a class="navbar-brand" href="{{ url('/farmacos') }}">Farmacos</a>
                        <a class="navbar-brand" href="{{ url('/recetas') }}">Recetas</a>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--Section-->
            <v-container fluid grid-list-lg>
                <v-layout align-space-around justify-center column class="form-contenedor">
                    <v-card style="padding: 10px;">
                        <h1>Clientes</h1>
                        <v-btn color="success" href="/clientes/create">Agregar</v-btn>
                        <div class="content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                @foreach ($Clientes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>
                                        <form action="/clientes/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <v-btn color="success" href="/clientes/{{ $item->id }}">Informacion</v-btn>
                                            <v-btn color="info" href="/clientes/{{ $item->id }}/edit">Editar</v-btn>
                                            <v-btn color="error" type="submit">Eliminar</v-btn>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </v-card>
                </v-layout>
            </v-container>
        </v-app>
    </div>
    <!--Scripts-->
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
