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
                        <h1>Nuevo Cliente</h1>
                        <v-divider></v-divider>
                        <h3>Datos personales</h3>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="/clientes" method="POST">
                            @csrf
                            <div class="form-group">
                                <v-layout>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="nombre" name="nombre" label="Nombre"
                                            value="{{old('nombre')}}" :counter="18">
                                        </v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="apellido" name="apellido" label="Apellido"
                                            value="{{old('apellido')}}" :counter="18">
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="correo" name="correo" label="Correo"
                                            value="{{old('correo')}}" :counter="30">
                                        </v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="telefono" name="telefono" label="Telefono"
                                            value="{{old('telefono')}}" :counter="10">
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="ciudad" name="ciudad" label="Ciudad"
                                            value="{{old('ciudad')}}" :counter="18">
                                        </v-text-field>
                                    </v-flex>
                                    <v-flex xs6>
                                        <v-text-field type="text" id="calle" name="calle" label="Calle"
                                            value="{{old('calle')}}" :counter="25"></v-text-field>
                                    </v-flex>
                                </v-layout>
                            </div>
                            <v-btn color="success" type="submit">Agregar</v-btn>
                            <v-btn color="error" href="/clientes"> Cancelar </v-btn>
                        </form>
                    </v-card>
                </v-layout>
            </v-container>

        </v-app>
    </div>
    <!--Scripts-->
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
