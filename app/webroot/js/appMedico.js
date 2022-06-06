function addMedico() {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/medicos/add',
        buttons: {
            formSubmit: {
                text: 'Cadastrar',
                btnClass: 'btn btn-success',
                action: function () {
                    var MedicoId = $('#MedicoAddForm');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/medicos/add',
                        data: MedicoId.serialize(),
                        cache: true,
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/medicos';
                        }
                    });
                    $.alert("Cadastrado com sucesso!");
                }
            },
            cancel: function () {
                //close
            },
        },
    });
}

function editMedico(id) {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/medicos/edit/' + id,
        buttons: {
            formSubmit: {
                text: 'Editar',
                btnClass: 'btn btn-warning',
                action: function () {
                    var MedicoEditForm = $('#MedicoEditForm');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/medicos/edit/' + id,
                        data: MedicoEditForm.serialize(),
                        cache: true,
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/medicos';
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

function deleteMedico(id) {
    $.confirm({
        title: '',
        content: '<h1 style="color: black;">Tem certeza que deseja excluir esse Medico?</h1>',
        buttons: {
            formSubmit: {
                text: 'Excluir',
                btnClass: 'btn btn-danger',
                action: function () {
                    $.ajax({
                        url: 'http://localhost/clinica/medicos/delete/' + id,
                        type: 'POST',
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/medicos';
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