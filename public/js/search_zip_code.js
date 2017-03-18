$(document).ready(function () {

    function clear_form_address() {
        $("#zip_code").val("");
        $("#public_place").val("");
        $("#local_type").val("");
        $("#district").val("");
        $("#city").val("");
        $("#state").val("");

        $("#zip_code").focus();
    };

    $("#zip_code").blur(function () {
        var zip_code = $(this).val().replace(/\D/g, '');

        if (zip_code != "") {
            var validacep = /^[0-9]{8}$/;

            if (validacep.test(zip_code)) {

                var search = "Buscasndo dados. Aguarde!";

                $("#public_place").val(search);
                $("#district").val(search);
                $("#city").val(search);
                $("#state").val(search);

                $.getJSON("//viacep.com.br/ws/" + zip_code + "/json/?callback=?", function (data) {

                    if (!("erro" in data)) {
                        $("#public_place").val(data.logradouro);
                        $("#district").val(data.bairro);
                        $("#city").val(data.localidade);
                        $("#state").val(data.uf);

                        $("#local_type").focus();
                    } else {
                        clear_form_address();
                        alert("CEP não encontrado!");
                    }

                });
            } else{
                clear_form_address();
                alert("Formato de CEP inválido.");
            }
        } else {
            clear_form_address();
        }
    });

});
