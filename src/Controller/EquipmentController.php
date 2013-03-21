<?php

App::uses('AppController', 'Controller');

/**
 * Equipment Controller
 *
 * @property Equipment $Equipment
 */
class EquipmentController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Equipment->recursive = 0;
        $this->set('equipment', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        $this->set('equipment', $this->Equipment->read(null, $id));
        $statuses = $this->Equipment->Status->find('list');
        $pieces = $this->Equipment->Item->Piece->find('list');
        $this->set(compact('statuses', 'pieces'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Equipment->create();
            if ($this->Equipment->save($this->request->data)) {
                $this->Session->setFlash(__('The equipment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The equipment could not be saved. Please, try again.'));
            }
        }
        $statuses = $this->Equipment->Status->find('list');
        $categories = $this->Equipment->Category->find('list');
        $this->set(compact('statuses', 'categories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Equipment->save($this->request->data)) {
                $this->Session->setFlash(__('The equipment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The equipment could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Equipment->read(null, $id);
        }
        $statuses = $this->Equipment->Status->find('list');
        $categories = $this->Equipment->Category->find('list');
        $this->set(compact('statuses', 'categories'));
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        if ($this->Equipment->delete()) {
            $this->Session->setFlash(__('Equipment deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Equipment was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Equipment->recursive = 0;
        $this->set('equipment', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        $this->set('equipment', $this->Equipment->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Equipment->create();
            if ($this->Equipment->save($this->request->data)) {
                $this->Session->setFlash(__('The equipment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The equipment could not be saved. Please, try again.'));
            }
        }
        $statuses = $this->Equipment->Status->find('list');
        $categories = $this->Equipment->Category->find('list');
        $this->set(compact('statuses', 'categories'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Equipment->save($this->request->data)) {
                $this->Session->setFlash(__('The equipment has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The equipment could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Equipment->read(null, $id);
        }
        $statuses = $this->Equipment->Status->find('list');
        $categories = $this->Equipment->Category->find('list');
        $this->set(compact('statuses', 'categories'));
    }

    /**
     * admin_delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Equipment->id = $id;
        if (!$this->Equipment->exists()) {
            throw new NotFoundException(__('Invalid equipment'));
        }
        if ($this->Equipment->delete()) {
            $this->Session->setFlash(__('Equipment deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Equipment was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
