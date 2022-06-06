<?php
App::uses('AppController', 'Controller');   

class ConsultasController extends AppController {

    public function index() {
        $this->loadModel("Paciente");

        $this->loadModel("Medico");

        $query3 = 'SELECT * FROM consultas AS Consulta INNER JOIN medicos AS Medico ON Consulta.medico_id = Medico.id 
        INNER JOIN  pacientes AS Paciente ON Consulta.paciente_id = Paciente.id';

        $consultas = $this->Consulta->query($query3);
        $this->set('consultas', $consultas);
    }

    public function add() {
        if($this->request->is('post')) { 
            if($this->Consulta->save($this->request->data)) {
                $this->redirect(array('action' => 'index')); 
            }
        }
        $this->loadModel("Paciente"); //Carregar a model Paciente para dentro do controller de Consultas
        $query = 'SELECT * FROM pacientes AS Paciente'; //Selecionar todos itens da tabela pacientes as Paciente para ->['Paciente']['campo_da_tabela']
        $pacientes = $this->Paciente->query($query);
        $this->set('pacientes', $pacientes);

        $this->loadModel("Medico");
        $query1 = 'SELECT * FROM medicos AS Medico';
        $medicos = $this->Medico->query($query1);
        $this->set('medicos', $medicos);
    }

    public function delete($id) {
        $this->Consulta->delete($id);
        $this->redirect(array('action' => 'index'));
    }
}