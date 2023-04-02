

function limpiar_logueo() {

    document.getElementById('InputCorreo').value = "";
    document.getElementById('InputPassword').value = "";
    document.getElementById('InputCorreo').focus();

}


function validar_logueo() {

    if (((/^\s*$/.test(document.getElementById('InputCorreo').value))) || ((/^\s*$/.test(document.getElementById('InputPassword').value))))
    {
        alert("Ingrese sus credenciales");
        limpiar_logueo();
        return (false);
    }
    document.getElementById('InputPassword').value = calcMD5(document.getElementById('InputPassword').value);
    document.formLogin.submit();

}

function valida_registro() {


    if (document.getElementById('InputPassword').value !== document.getElementById('InputPassword2').value) {
        alert("No hay coincidencia en el Password de Confirmacion. \n Ingreselo de nuevo");
        document.getElementById('InputPassword').value = "";
        document.getElementById('InputPassword2').value = "";
        document.getElementById('InputPassword').focus();
    }

    document.getElementById('InputPassword').value = calcMD5(document.getElementById('InputPassword').value);
    document.getElementById('InputPassword2').value = "";

    document.getElementById('formRegistro').submit();

}