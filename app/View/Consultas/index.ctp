<div style="  display: flex; justify-content: space-between; align-items: center">
    <h1>Tabela de Consultas</h1>
    <button type="button" class="btn btn-success" style="text-align: end" href="#" onclick="addConsulta()">Marcar Consulta</button>
</div>
<table class="table table-hover">
    <tr>
        <th>Médico</th>
        <th>Paciente</th>
        <th>Agendamento</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($consultas as $consulta): ?>
        <tr>    
            <td><?php echo $consulta['Medico']['nome'];?></td>
            <td><?php echo $consulta['Paciente']['nome'];?></td>
            <td><?php echo $consulta['Consulta']['dia'];?></td>
            <td><button href="#" type="button" class="btn btn-danger" onclick="deleteConsulta(<?php echo $consulta['Consulta']['id']?>)">Delete</button></td>
        </tr>
    <?php endforeach; ?>

</table>
<a href="http://localhost/clinica">Voltar</a>