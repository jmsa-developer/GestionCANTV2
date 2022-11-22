const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});


document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('usuario').value;
  if(usuario.length == 0) {
    alert('No has escrito nada en el usuario');
    return;
  }
  var clave = document.getElementById('clave').value;
  if (clave.length < 6) {
    alert('La clave no es válida tiene que ser mayor a 6 numeros');
    return;
  }
  let datos = new FormData(document.getElementById("formulario"));
  $.ajax({
		type: "POST",
		url: "?pagina=login",
		data: datos,
		contentType: false,
		processData: false,
		success: function (response) {
      console.log(response)
			var res = JSON.parse(response);
			if (res.tipo == "success") {
				window.location = "?controlador=app&accion=index";
			}
			else {
				Swal.fire(
					res.titulo, res.mensaje, res.tipo
				)
			}
		},
		error: function (response) {
			Swal.fire(
				"Error",
				"Intente otra vez",
				"error"
			)
		}
	})
}

