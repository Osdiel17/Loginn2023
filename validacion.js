function validarForm() {
    var usuario = document.forms["formulario"]["usuario"].value;
    var contraseña = document.forms["formulario"]["contraseña"].value;

    if (usuario == "") {
        alert("Tiene que digitar un Usuario");
        return false;
    }

    if (contraseña == "") {
        alert("Tiene que digitar una Contraseña");
        return false;
    }
}