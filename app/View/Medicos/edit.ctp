<?php
    echo $this->Html->tag('h1', 'Cadastrar Médico');
    echo $this->Form->create('Medico');
    echo $this->Form->input('Medico.nome');
?>
