<?php

class Dzinehub_Blog_Model_Post extends Mage_Core_Model_Abstract
{
	protected function _construct()
	{
		$this->_init('blog/posts');
	}
}