function addPaciente() {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/pacientes/add',
        buttons: {
            formSubmit: {
                text: 'Cadastrar',
                btnClass: 'btn btn-success',
                action: function () {
                    var pacienteId = $('#PacienteAddForm');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/pacientes/add',
                        data: pacienteId.serialize(),
                        cache: true,
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/pacientes';
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

function editPaciente(id) {
    $.confirm({
        title: '',
        content: 'url:http://localhost/clinica/pacientes/edit/' + id,
        buttons: {
            formSubmit: {
                text: 'Editar',
                btnClass: 'btn btn-warning',
                action: function () {
                    var PacienteEditForm = $('#PacienteEditForm');
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/clinica/pacientes/edit/' + id,
                        data: PacienteEditForm.serialize(),
                        cache: true,
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/pacientes';
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

function deletePaciente(id) {
    $.confirm({
        title: '',
        content: '<h1 style="color: black;">Tem certeza que deseja excluir esse paciente?</h1>',
        buttons: {
            formSubmit: {
                text: 'Excluir',
                btnClass: 'btn btn-danger',
                action: function () {
                    $.ajax({
                        url: 'http://localhost/clinica/pacientes/delete/' + id,
                        type: 'POST',
                        beforeSend: function (request) {

                        },
                        success: function (retorno) {
                            location.href = 'http://localhost/clinica/pacientes';
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