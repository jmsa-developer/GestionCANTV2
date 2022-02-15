const formulario = document.getElementById('formulario');
const selectTipo = document.getElementById('tipo');
selectTipo.addEventListener('change', (e) => {
    let tipo = e.target.value;
    if (tipo == "citas" || tipo == "cursos" || tipo == "pagoscitas" || tipo == "pagoscursos") {
        $('.formulario__grupoFecha').removeClass('d-none');
        $('#desde').attr('required', 1);
        $('#hasta').attr('required', 1);
    }
    else {
        $('.formulario__grupoFecha').addClass('d-none');
        $('#desde').attr('required', null);
        $('#hasta').attr('required', null);
    }
})

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
    setTimeout(() => {
        document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
    }, 5000);
    let accion = formulario.action;
    formulario.action += selectTipo.value;
    formulario.submit();
    formulario.action = accion;
})