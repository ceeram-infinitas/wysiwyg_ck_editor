<?php
class R4cdc231840484988b640247a6318cd70 extends CakeRelease {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = 'Migration for WysiwygCkEditor version 0.1';

/**
 * Plugin name
 *
 * @var string
 * @access public
 */
	public $plugin = 'WysiwygCkEditor';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
		),
	);

	
/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
?>