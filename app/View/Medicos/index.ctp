<div style="  display: flex; justify-content: space-between; align-items: center">
    <h1>Tabela de Médicos</h1>
    <button type="button" class="btn btn-success" style="text-align: end" href="#" onclick="addMedico()">Cadastrar Medico</button>
</div>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($medicos as $medico): ?>
        <tr>    
            <td><?php echo $medico['Medico']['id'];?></td>
            <td><a href="#" onclick="viewMedico(<?php $medico['Medico']['id'];?>)"><?php echo $medico['Medico']['nome'];?></a></td>
            <td>
                <button href="#" type="button" class="btn btn-warning" onclick="editMedico(<?php echo $medico['Medico']['id']?>)">Edit</button> /
                <button href="#" type="button" class="btn btn-danger" onclick="deleteMedico(<?php echo $medico['Medico']['id']?>)">Delete</button> 
            </td>
        </tr>
    <?php endforeach; ?>

</table>
<a href="http://localhost/clinica">Voltar</a>