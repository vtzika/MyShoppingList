(function(){
	angular.module('MyShoppingList')
		.controller('ProductsController', ProductsController);

	ProductsController.$inject = ['ProductsService'];

	function ProductsController(ProductsService){
		var self = this;
		self.quantities = [1, 2, 3];

		ProductsService.getProducts().then(function(products){
			self.products = products.data;
		})
	};
})();