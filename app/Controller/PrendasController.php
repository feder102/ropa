<?php
App::uses('AppController', 'Controller');
/**
 * Prendas Controller
 *
 * @property Prenda $Prenda
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrendasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array('Prenda','Colore','Talle');
/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('prendas', $this->Prenda->find('all', array('recursive' => -1, 'conditions' => array('Prenda.deleted' => 0),
				$this->Paginator->paginate('Prenda'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prenda->exists($id)) {
			throw new NotFoundException(__('prenda no válido/a.'));
		}
		$options = array('conditions' => array('Prenda.' . $this->Prenda->primaryKey => $id));
		$this->set('prenda', $this->Prenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prenda->create();
			if ($this->Prenda->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La prenda ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la prenda no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}else{
			$colores = $this->Colore->find('all', array('recursive'=> -1,'conditions'=> array('Colore.deleted'=>0)));
			$talles = $this->Talle->find('all', array('recursive'=> -1,'conditions'=> array('Talle.deleted'=>0)));
			$this->set(array('colores'=> $colores,'talles'=> $talles));
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
		if (!$this->Prenda->exists($id)) {
			throw new NotFoundException(__('prenda no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prenda->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La prenda ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La prenda no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Prenda.' . $this->Prenda->primaryKey => $id));
			$this->request->data = $this->Prenda->find('first', $options);
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
		$this->Prenda->id = $id;
		if (!$this->Prenda->exists()) {
			throw new NotFoundException(__('prenda no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prenda->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La prenda ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La prenda no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
