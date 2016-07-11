(function(){
	angular.module('MyShoppingList')
		.controller('ProductsController', ProductsController);

	ProductsController.$inject = ['ProductsService'];

	function ProductsController(ProductsService){
		var self = this;
		return ProductsService.getProducts();
	};
})();