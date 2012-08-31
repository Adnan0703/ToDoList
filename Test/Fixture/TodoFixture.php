<?php
/**
 * TodoFixture
 *
 */
class TodoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'list' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => 'List name that todo belongs to', 'charset' => 'latin1'),
		'note' => array('type' => 'text', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => 'Details on the todo', 'charset' => 'latin1'),
		'completed' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => 'Is todo completed?'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'list' => array('column' => 'list', 'unique' => 0),
			'completed' => array('column' => 'completed', 'unique' => 0),
			'note' => array('column' => 'note', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'list' => 'Lorem ipsum dolor sit amet',
			'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'completed' => 1,
			'created' => '2012-08-31 14:10:02',
			'modified' => '2012-08-31 14:10:02'
		),
	);

}
