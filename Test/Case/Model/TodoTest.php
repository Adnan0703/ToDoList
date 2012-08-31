<?php
App::uses('Todo', 'ToDoList.Model');

/**
 * Todo Test Case
 *
 */
class TodoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.to_do_list.todo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Todo = ClassRegistry::init('ToDoList.Todo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Todo);

		parent::tearDown();
	}

}
