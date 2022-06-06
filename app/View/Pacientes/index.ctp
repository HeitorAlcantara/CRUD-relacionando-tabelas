<div style="  display: flex; justify-content: space-between; align-items: center">
    <h1>Tabela de Pacientes</h1>
    <button type="button" class="btn btn-success" style="text-align: end" href="#" onclick="addPaciente()">Cadastrar Paciente</button>
</div>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td><?php echo $paciente['Paciente']['id'];?></td>
            <td><a href="#" onclick="viewPaciente(<?php $paciente['Paciente']['id']?>)"><?php echo $paciente['Paciente']['nome'];?></a></td>
            <td>
                <button href="#" type="button" class="btn btn-warning" onclick="editPaciente(<?php echo $paciente['Paciente']['id']?>)">Edit</button> /
                <button href="#" type="button" class="btn btn-danger" onclick="deletePaciente(<?php echo $paciente['Paciente']['id']?>)">Delete</button> 
            </td>
        </tr>
    <?php endforeach; ?>

</table>
<a href="http://localhost/clinica">Voltar</a>