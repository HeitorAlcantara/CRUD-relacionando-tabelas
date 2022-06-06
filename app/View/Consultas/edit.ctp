<form action="/clinica/consultas/edit" method="get" id="DadosConsulta1">
    <label for="PacienteId">Pacientes</label>
    <select name="data[Consulta][paciente_id]" id="teste">
        <?php foreach($pacientes as $paciente):?>
        <option value="<?php echo $paciente['Paciente']['id']?>"><?php echo $paciente['Paciente']['nome']?></option>
        <?php endforeach;?>
    </select>

    <label for="MedicoId">Medicos</label>
    <select name="data[Consulta][medico_id]" id="teste1">
        <?php foreach($medicos as $medico):?>
        <option value="<?php echo $medico['Medico']['id']?>"><?php echo $medico['Medico']['nome']?></option>
        <?php endforeach;?>
    </select>

    <label for="data">Data</label>
    <input type="date" name="data[Consulta][dia]" id="teste2">
</form>

