document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const cuentaOrigen = form.querySelector("input[type='text']:nth-of-type(1)"); //Input 1
    const cuentaDestinatario = form.querySelector("input[type='text']:nth-of-type(2)"); //input 2
    const monto = form.querySelector("input[type='number']");
    const moneda = form.querySelector("#moneda");
    const motivo = form.querySelector("#motivo");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); 

        //verificar campos
        if (cuentaOrigen.value.trim() === "" || cuentaDestinatario.value.trim() === "" || monto.value.trim() === "") {
            alert("Por favor, completa todos los campos.");
            return;
        }


        
        const transaccionData = {
            cuentaOrigen: cuentaOrigen.value,
            cuentaDestinatario: cuentaDestinatario.value,
            monto: parseFloat(monto.value),
            moneda: moneda.value,
            motivo: motivo.value
        };

     

    });
});
