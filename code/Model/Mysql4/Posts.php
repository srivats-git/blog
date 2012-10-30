<?php

class Dzinehub_Blog_Model_Mysql4_Posts extends Mage_Core_Model_Mysql4_Abstract
{
	protected function _construct()
	{
		$this->_init('blog/posts','id');
	}
}