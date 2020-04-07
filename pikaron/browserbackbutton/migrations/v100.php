<?php
/**
 *
 * Stop Browser Back Button. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, Picaron, https://github.com/picaronin/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\browserbackbutton\migrations;

class v100 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			// Add new config table settings
			array('config.add', array('browserbackbutton_version', '1.0.0')),
		);
	}

	public function revert_data()
	{
		return array(
			// Remove config table settings
			array('config.remove', array('browserbackbutton_version')),
		);
	}
}
