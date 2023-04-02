

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