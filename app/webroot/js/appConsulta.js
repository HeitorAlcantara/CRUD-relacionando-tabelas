function addConsulta() {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/consultas/add',
        buttons: {
            formSubmit: {
                text: 'Cadastrar',
                btnClass: 'btn btn-success',
                action: function () {
                    var dadosConsulta = $('#DadosConsulta');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/consultas/add',
                        data: dadosConsulta.serialize(),
                        cache: true,
                        beforeSend: function (request) {
                        },
                        success: function (retorno) {
                            location.href = "http://localhost/clinica/consultas"
                        }
                    });
                }
            },
            cancel: function () {
                //close
            },
        },
    });
}

function deleteConsulta(id) {
    $.confirm({
        title: '',
        content: '<h1 style="color: black;">Tem certeza que deseja excluir essa consulta?</h1>',
        buttons: {
            formSubmit: {
                text: 'Excluir',
                btnClass: 'btn btn-danger',
                action: function () {
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/consultas/delete/' + id,
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = "http://localhost/clinica/consultas"
                        }
                    });
                }
            },
            cancel: function () {
                //close
            },
        },
    });
}