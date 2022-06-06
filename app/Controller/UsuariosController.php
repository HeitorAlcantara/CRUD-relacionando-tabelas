<?php
App::uses('AppController', 'Controller');   

class UsuariosController extends AppController {
    public function index() {
        $this->set('usuarios', $this->Usuario->find('all'));
    }

    public function add() {
        if($this->request->is('post')) {
            if($this->Usuario->save($this->request->data)){
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id) {
        $this->Usuario->id = $id;
        if($this->request->is('get')) {
            $this->request->data = $this->Usuario->findById($id);
        } else {
            if ($this->Usuario->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        $this->Usuario->delete($id);
        $this->redirect(array('action' => 'index'));
    }
}