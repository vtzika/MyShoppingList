<?php

namespace Varvara\Controllers;

class ProductController
{
	public static function getProducts()
	{
		return [
			[
				'id' => 1,
				'description' => 'Product A',
				'price' => '3.4'
			],
			[
				'id' => 2,
				'description' => 'Product B',
				'price' => '1.3'
			]
		];
	}
}