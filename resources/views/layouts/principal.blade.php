<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/logo.png" />
  <title>Cerrajería Bululo Barranquilla | llaves, cerraduras y más</title>
  <meta name="keywords" content="Cerrajeria en Barranquilla, llaves en Barranquilla, cajas fuertes, llaves,bovedas bancarias,seguridad digital,cerrajero, servicio a domicilio, 24 horas" />
  <meta name="keywords" content="Dirección: Carrera 44 #64-28, Barranquilla, Atlántico, Colombia. Telefonos: +573005864202,+573003334909,+573023182079 " />
  <meta name="description" content="cerrajeria bululo es una empresa ubicada en Barranquilla, encargada de ofrecer servicios de alta calidad en cerrajeria especializada en bovedas bancarias, cajas fuertes, sistemas de seguridad digital, automotriz y llaves en general. " />
  <meta name="Subjetc" content="cerrajería especializada en bóvedas bancarias, cajas fuertes, sistemas de seguridad digital y automotriz. " />
  <meta name="author" content="Wilson Sayago: sayagowilson92@gmail.com, Alfredo Valbuena: almavalo11@gmail.com" />
  <META name="robots" content="INDEX,FOLLOW"/>
  <meta name="geo.region" content="Colombia"/>
  <meta name="geo.placename" content="Barranquilla"/>
  {!!Html::style('materialize/css/materialize.min.css')!!}
  {!!Html::style('skitter-master/dist/skitter.css')!!}
  {!!Html::style('css/principal.css')!!}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  @include('layouts.menu')
  @yield('content')
  @include('layouts.footer')
      
  {!!Html::script('js/jquery-2.1.1.min.js')!!}
  {!!Html::script('materialize/js/materialize.min.js')!!}
  {!!Html::script('skitter-master/dist/jquery.easing.1.3.js')!!}
  {!!Html::script('skitter-master/dist/jquery.skitter.min.js')!!}
  <script>
    $(document).ready(function(){
        $('.skitter-large').skitter({
            fullscreen: true,
            dots: false,
            label_animation: "right",
            navigation: true,
        });
        $('.parallax').parallax();
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('.moda2').modal();
        $('.scrollspy').scrollSpy();
        if(window.innerWidth>950){
            $('.tap-target').tapTarget('open');
        }
    });
  </script>      
</body>
</html>