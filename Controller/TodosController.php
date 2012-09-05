<?php
App::uses('ToDoListAppController', 'ToDoList.Controller');
/**
 * Todos Controller
 *
 * @property Todo $Todo
 */
class TodosController extends ToDoListAppController
{
	public $paginate = array(
		'conditions' => array(
			'Todo.completed' => 0,
		),
		'order' => array(
			'Todo.list' => 'desc'
		),
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Todo->recursive = 0;
		$this->set('todos', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		$this->Todo->id = $id;
		if (!$this->Todo->exists()) {
			throw new NotFoundException(__('Invalid todo'));
		}
		$this->set('todo', $this->Todo->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->request->data['Todo']['due'] = date('Y-m-d H:i:s', strtotime($this->request->data['Todo']['due']));
			$this->Todo->create();
			if ($this->Todo->save($this->request->data)) {
				$this->Session->setFlash(__('The todo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The todo could not be saved. Please, try again.'));
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
	public function edit($id = null)
	{
		$this->Todo->id = $id;
		if (!$this->Todo->exists()) {
			throw new NotFoundException(__('Invalid todo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Todo']['due'] = date('Y-m-d H:i:s', strtotime($this->request->data['Todo']['due']));
			if ($this->Todo->save($this->request->data)) {
				$this->Session->setFlash(__('The todo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The todo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Todo->read(null, $id);
		}
	}

	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Todo->id = $id;
		if (!$this->Todo->exists()) {
			throw new NotFoundException(__('Invalid todo'));
		}
		if ($this->Todo->delete()) {
			$this->Session->setFlash(__('Todo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Todo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
