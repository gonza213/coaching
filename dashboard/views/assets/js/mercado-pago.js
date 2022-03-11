 // Agrega credenciales de SDK
 const mp = new MercadoPago("TEST-5a76b1f2-6036-4726-89a5-979890d1e144", {
    locale: "es-AR",
  });

  mp.checkout({
    tokenizer: {
        totalAmount: 700,
        backUrl: 'http://localhost/coaching/dashboard/formulario',
        summary: {
            productLabel: 'Reserva de sesión',
            product: 700,
        },
    },
    render: {
        container: "#pago", // Indica dónde se mostrará el botón
        label: "Pagar",
        // Cambia el texto del botón de pago (opcional)
    },
});