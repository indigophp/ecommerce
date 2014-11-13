<?php

/*
 * This file is part of the Indigo Ecommerce component.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Ecommerce\Providers;

use Fuel\Dependency\ServiceProvider;

/**
 * Provides menu services
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FuelServiceProvider extends ServiceProvider
{
	/**
	 * {@inheritdoc}
	 */
	public $provides = true;

	/**
	 * {@inheritdoc}
	 */
	public function provide()
	{
		$this->extend('admin.menu', function($dic, $instance)
		{
			$menu = $instance->addChild('ecommerce', ['uri' => '', 'label' => gettext('Ecommerce')]);

			$menu->addChild('products', ['uri' => '', 'label' => gettext('Products')]);

			return $instance;
		});
	}
}
