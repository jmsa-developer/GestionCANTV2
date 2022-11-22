    <?php require "componentes/header.php" ?>
    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div class="dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <p>
            <h2 class="text-white">Funciones de la Empresa: </h2><br>ofrecer soluciones integrales de telecomunicaciones para satisfacer las necesidades de sus clientes de servicios de telefonía fija, telefonía móvil y acceso a Internet.</p>
        </div>
        <html>
<head>
  <center> 
<title>Superslider</title>

  <ul class="superslider">
    <li><img clas="imagen_carrusel" src="img/slider2.jpg"/></li>
    <li><img src="img/fondo2.png"/></li>
    
  </ul>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2"></script>
<script type="text/javascript">
jQuery(function(){
    var fotitoActual = 0,
      elementos = jQuery('.superslider li'),
      cantidadElementos = elementos.length;
    function rularSlides() {
      var cogerActual = jQuery('.superslider li').eq(fotitoActual);
      elementos.hide();
      cogerActual.css('display','inline-block');
    }
    var autoSlide = setInterval(function() {
      fotitoActual += 1;
      if (fotitoActual > cantidadElementos - 1) {
        fotitoActual = 0;
      }
      rularSlides();
    }, 3000);
});
</script>
</center>
        <div class="card">
            <p>
            <h2 class="text-white">Ventajas del sistema: </h2>
            <br><b>Aumento de productividad laboral</b> 
            <br><b>optimizacion del proceso de entradas y salidas </b> 
            <br><b>Facilidad para los usuarios </b> 
            <br><b>Ahorro de recursos</b> 
        </div>

        <div class="card">
            <p>
            <h2 class="text-white"> Servicios  prestados por la Empresa:</h2><br>
            <b>Entre nuestros Servicios estan</b>
           registro de usuarios cantv<br>
            servicios de telefonia movil. <br>
            planes de internet <br>
        Television <br>
            </p>
        </div>
    </div>
    <!--main container end-->
    <?php require "componentes/footer.php" ?>