
$("#myform").validate({
    rules: {
        'valor': {
            required: true,
            minValue: "#valor"
        }
    },
    messages: {
        'valor': {
            required: "Value is required.",
            minValue: "Valor deve ser maior que o lance atual"
        }


    }

});
