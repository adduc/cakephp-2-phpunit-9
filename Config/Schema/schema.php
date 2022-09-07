<?php

/**
 * Using the Schema command line utility
 * cake schema run create Sessions
 */
class AppSchema extends CakeSchema
{

/**
 * Name property
 *
 * @var string
 */
	public $name = 'App';

/**
 * Before callback.
 *
 * @param array $event Schema object properties
 * @return bool Should process continue
 */
	public function before($event = array()) {
		return true;
	}

/**
 * After callback.
 *
 * @param array $event Schema object properties
 * @return void
 */
	public function after($event = array()) {
	}

	public $model1s = array(
		'id' => array('type' => 'string', 'null' => false, 'key' => 'primary'),
		'data' => array('type' => 'text', 'null' => true, 'default' => null),
	);

	public $model2s = array(
		'id' => array('type' => 'string', 'null' => false, 'key' => 'primary'),
		'data' => array('type' => 'text', 'null' => true, 'default' => null),
	);

}
