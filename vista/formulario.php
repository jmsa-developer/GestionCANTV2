	<form action="index.html" id="formulario">
		<img src="img/avatar.png">

		<h2 class="title">Bienvenidos</h2>
		<div class="input-div one">
			<div class="i">
				<i class="fas fa-user"></i>
			</div>
			<div class="div">
				<h5>Nombre de Usuario</h5>
				<input type="text" class="input" name="usuario" id="usuario" pattern="[a-zA-Z0-9_-]{4,16}" required>
			</div>
		</div>
		<div class="input-div pass">
			<div class="i">
				<i class="fas fa-lock"></i>
			</div>
			<div class="div">
				<h5>Contraseña</h5>
				<input type="password" class="input" name="clave" id="clave" pattern=".{4,16}" required>
			</div>
		</div>
		<div class="row">
			<button class="btn" type="submit">Ingresar</button>
		</div>

	</form>