<?php
App::uses('AppController', 'Controller');   

class PacientesController extends AppController {

    public function index() {
        $this->set('pacientes', $this->Paciente->find('all'));
    }
    
    public function view() {
        
    }

    public function add() {
        if($this->request->is('post')) { 
            if($this->Paciente->save($this->request->data)) {
                $this->redirect(array('action' => 'index')); 
            }
        }
    }

    public function edit($id) {
        $this->Paciente->id = $id;
        if($this->request->is('get')) { 
            $this->request->data = $this->Paciente->findById($id);
        } else {
            if ($this->Paciente->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        $this->Paciente->delete($id);
        $this->redirect(array('action' => 'index'));

    }
}