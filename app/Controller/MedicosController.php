<?php
App::uses('AppController', 'Controller');   

class MedicosController extends AppController {

    public function index() {
        echo $this->set('medicos', $this->Medico->find('all'));
    }

    public function add() {
        if($this->request->is('post')) { 
            if($this->Medico->save($this->request->data)) {
                $this->redirect(array('action' => 'index')); 
            }
        }
    }

    public function edit($id) {
        $this->Medico->id = $id;
        if($this->request->is('get')) { 
            $this->request->data = $this->Medico->findById($id);
        } else {
            if ($this->Medico->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        $this->Medico->delete($id);
        $this->redirect(array('action' => 'index'));
    }
}