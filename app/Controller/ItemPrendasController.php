<?php
App::uses('AppController', 'Controller');
/**
 * ItemPrendas Controller
 *
 * @property ItemPrenda $ItemPrenda
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemPrendasController extends AppController {
//A
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('itemPrendas', $this->ItemPrenda->find('all', array('recursive' => -1, 'conditions' => array('ItemPrenda.deleted' => 0),
				$this->Paginator->paginate('ItemPrenda'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemPrenda->exists($id)) {
			throw new NotFoundException(__('item prenda no válido/a.'));
		}
		$options = array('conditions' => array('ItemPrenda.' . $this->ItemPrenda->primaryKey => $id));
		$this->set('itemPrenda', $this->ItemPrenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemPrenda->create();
			if ($this->ItemPrenda->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item prenda ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item prenda no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemPrenda->exists($id)) {
			throw new NotFoundException(__('item prenda no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemPrenda->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item prenda ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item prenda no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemPrenda.' . $this->ItemPrenda->primaryKey => $id));
			$this->request->data = $this->ItemPrenda->find('first', $options);
		}
        	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemPrenda->id = $id;
		if (!$this->ItemPrenda->exists()) {
			throw new NotFoundException(__('item prenda no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemPrenda->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item prenda ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item prenda no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
