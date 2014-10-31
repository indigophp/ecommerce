<?php

/*
 * This file is part of the IndigoPHP framework.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Admin\Controller;

/**
 * Webshop Admin controller
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Webshop extends Base
{
	use \Indigo\Common\Controller\Theme
	{
		before as private _before;
	}

	/**
	 * {@inheritdoc}
	 */
	public function before()
	{
		$this->_before();

		if ( ! in_array($this->route->action, ['Login', 'Logout']))
		{
			return parent::before();
		}
		else
		{
			\View::setGlobal('admin_uri', $this->getUri());
		}
	}

	/**
	 * The basic welcome message
	 *
	 * @return View
	 */
	public function actionIndex()
	{
		return \View::forge('webshop/index.twig');
	}
}
