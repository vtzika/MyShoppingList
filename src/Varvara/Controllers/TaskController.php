<?php

namespace Varvara\Controllers;

class TaskController
{
	public static function getProductsForCart(id)
	{
		return [
			[
				'id' => 1,
				'description' => 'Product A',
				'price' => '3.4'
			],
			[
				'id' => 3,
				'description' => 'Product C',
				'price' => '9.4'
			]
		];
	}
}