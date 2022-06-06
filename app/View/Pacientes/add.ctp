<?php
    echo $this->Html->tag('h1', 'Cadastrar Paciente');
    echo $this->Form->create('Paciente');
    echo $this->Form->input('Paciente.nome');
?>
