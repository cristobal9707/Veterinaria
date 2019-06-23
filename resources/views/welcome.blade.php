<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="csrf-token" content="{{csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>
    <div id="app">
        <v-app id="inspire">
            <v-layout align-center justify-center column>
                <h1>Veterinaria</h1>
                <div>
                    @if (Route::has('login'))
                    @auth
                    <v-btn href="{{ url('/recetas') }}" color="info">Pagina Principal</v-btn>
                    @else
                    <v-btn href="{{ route('login') }}" color="info">Iniciar Sesion</v-btn>
                    @if (Route::has('register'))
                    <v-btn href="{{ route('register') }}" color="info">Registrarte</v-btn>
                    @endif
                    @endauth
                    @endif
                </div>
            </v-layout>
        </v-app>
    </div>
    <!--Scripts-->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
