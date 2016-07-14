<?php

namespace Varvara\Controllers;

use Varvara\Models\Product;

class ProductController
{
	public static function getProducts()
	{		
		$productA = new Product();
		$productA->setId(1);
		$productA->setDescription('Product A');
		$productA->setPrice(3.4);

		$productB = new Product();
		$productB->setId(2);
		$productB->setDescription('Product B');
		$productB->setPrice(2.6);

		$productC = new Product();
		$productC->setId(3);
		$productC->setDescription('Product C');
		$productC->setPrice(9.4);

		$productD = new Product();
		$productD->setId(4);
		$productD->setDescription('Product D');
		$productD->setPrice(1.1);
		
		return [
			$productA,
			$productB,
			$productC,
			$productD
		];
	}
}