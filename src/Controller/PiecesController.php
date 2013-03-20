<?php
App::uses('AppController', 'Controller');
/**
 * Pieces Controller
 *
 * @property Piece $Piece
 */
class PiecesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Piece->recursive = 0;
		$this->set('pieces', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		$this->set('piece', $this->Piece->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Piece->create();
			if ($this->Piece->save($this->request->data)) {
				$this->Session->setFlash(__('The piece has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piece could not be saved. Please, try again.'));
			}
		}
		$manufacturers = $this->Piece->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Piece->save($this->request->data)) {
				$this->Session->setFlash(__('The piece has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piece could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Piece->read(null, $id);
		}
		$manufacturers = $this->Piece->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
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
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		if ($this->Piece->delete()) {
			$this->Session->setFlash(__('Piece deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Piece was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Piece->recursive = 0;
		$this->set('pieces', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		$this->set('piece', $this->Piece->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Piece->create();
			if ($this->Piece->save($this->request->data)) {
				$this->Session->setFlash(__('The piece has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piece could not be saved. Please, try again.'));
			}
		}
		$manufacturers = $this->Piece->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Piece->save($this->request->data)) {
				$this->Session->setFlash(__('The piece has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piece could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Piece->read(null, $id);
		}
		$manufacturers = $this->Piece->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
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
		$this->Piece->id = $id;
		if (!$this->Piece->exists()) {
			throw new NotFoundException(__('Invalid piece'));
		}
		if ($this->Piece->delete()) {
			$this->Session->setFlash(__('Piece deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Piece was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
