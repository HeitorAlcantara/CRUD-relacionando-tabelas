function addUsuario() {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/usuarios/add',
        buttons: {
            formSubmit: {
                text: 'Cadastrar',
                btnClass: 'btn btn-success',
                action: function () {
                    var dadosUsuario = $('#DadosAddUsuario');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/usuarios/add',
                        data: dadosUsuario.serialize(),
                        cache: true,
                        beforeSend: function (request) {
                        },
                        success: function (retorno) {
                            location.href = "http://localhost/clinica/usuarios"
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

function editUsuario(id) {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/usuarios/edit/' +id,
        buttons: {
            formSubmit: {
                text: 'Editar',
                btnClass: 'btn btn-warning',
                action: function () {
                    var dadosUsuario = $('#UsuarioEditForm');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/usuarios/edit/' +id,
                        data: dadosUsuario.serialize(),
                        cache: true,
                        beforeSend: function (request) {
                        },
                        success: function (retorno) {
                            location.href = "http://localhost/clinica/usuarios"
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

function deleteUsuario(id) {
    $.confirm({
        title: '',
        content: '<h1 style="color: black;">Tem certeza que deseja excluir esse paciente?</h1>',
        buttons: {
            formSubmit: {
                text: 'Excluir',
                btnClass: 'btn btn-danger',
                action: function () {
                    $.ajax({
                        url: 'http://localhost/clinica/usuarios/delete/' + id,
                        type: 'POST',
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/usuarios';
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