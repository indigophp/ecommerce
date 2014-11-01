<?php

/*
 * This file is part of the IndigoPHP framework.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Admin\Controller\Ecommerce;

use Indigo\Admin\Controller\Base;

/**
 * Products Admin controller
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Products extends Base
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

		return parent::before();
	}

	/**
	 * The basic welcome message
	 *
	 * @return View
	 */
	public function actionIndex()
	{
		return \View::forge('ecommerce/products/index.twig');
	}
}
