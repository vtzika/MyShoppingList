(function(){
	angular.module('MyShoppingList')
		.controller('ProductsController', ProductsController);

	ProductsController.$inject = ['ProductsService', 'CartService'];

	function ProductsController(ProductsService, CartService){
		var self = this;
		self.quantities = [1, 2, 3];
		self.addToCart = function(product){
			CartService.addToCart(product);
		};
		ProductsService.getProducts().then(function(products){
			self.products = products.data;
		})
	};
})();