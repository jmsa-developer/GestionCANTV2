	<form action="index.html" id="formulario">
						<img src="img/Avatar.png">

				<h2 class="title">Bienvenidos</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                        <div class="div">
           		   		<h5>Nombre</h5>
           		   		<input type="text" class="input" name="usuario" id="usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="clave" id="clave">
            	   </div>
            	</div>



            	
            	
            	<br><br>
            	 <?php 
            	 require("ingresar.php");
            	 ?>
            </form>