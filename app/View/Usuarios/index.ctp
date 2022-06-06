<div style="  display: flex; justify-content: space-between; align-items: center">
    <h1>Tabela de Usuários</h1>
    <button type="button" class="btn btn-success" style="text-align: end" href="#" onclick="addUsuario()">Cadastrar Usuário</button>
</div>

<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
    <tr>
        <td><?php echo $usuario['Usuario']['id'];?></td>
        <td><?php echo $usuario['Usuario']['nome'];?></td>
        <td>
            <button href="#" type="button" class="btn btn-warning" onclick="editUsuario(<?php echo $usuario['Usuario']['id']?>)">Edit</button> /
            <button href="#" type="button" class="btn btn-danger" onclick="deleteUsuario(<?php echo $usuario['Usuario']['id']?>)">Delete</button>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<a href="http://localhost/clinica">Voltar</a>