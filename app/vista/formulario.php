	<form action="registro.php" id="formulario" method="POST">
		<img src="img/Profile.png" style="top: 15 px; right: 50 px;" width="170" alt="150">

		<h2 class="title">Bienvenidos</h2>
		<div class="input-div one">
		<form id="loginform">
                        <input type="text" name="usuario" placeholder="Usuario" id="usuario" pattern="[a-zA-Z0-9_-]{4,16}" required name="txtUsuario">
                        
                        <input type="password" placeholder="Contraseña"  name="clave" id="clave" pattern=".{4,16}" required name="txtContraseña" >
                        
                     
		</div>
		<div class="row">
			<button class="btn" type="submit">Ingresar</button>
		</div>
		<div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="#">Volver</a>

	</form>