<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$metodo = $_GET['metodo'];
		if($metodo = "listar"){
			require_once "modelo/Usuario.php";
			$usu = new Usuario;//Instanciar Usuario
			$usuarios = $usu->listar();//Función para obtener los usuarios

			foreach($usuarios as $usuario){		  
				$usuario->button = "<a href=?pagina=modificar_usuario&id=".$usuario->id." class='editar btn btn-sm btn-warning mr-1 mb-1' title='Editar'><i class='fas fa-pencil-alt'></i></a>";
				if($usuario->estado == "1"){
					$usuario->button .= "<a href=?pagina=usuario&accion=deshabilitar&id=".$usuario->id." class='inhabilitar btn btn-sm btn-danger mr-1 mb-1' title='Eliminar'><i class='fas fa-trash-alt'></i></a>";
				}
				else{
					$usuario->button .= "<a href=?pagina=usuario&accion=habilitar&id=".$usuario->id." class='habilitar btn btn-sm btn-outline-info mr-1 mb-1' title='Activar'><i class='fas fa-trash'></i></a>";
				}
		   
			}
			http_response_code(200);
		
			echo json_encode([
			'data' => $usuarios
			]);
		}
	}
	else{
		if (is_file("vista/".$pagina.".php")) 
		{
			require_once("vista/".$pagina.".php");
		}
		else{
			echo "pagina en construcion";
		}
	}
