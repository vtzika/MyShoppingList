(function(){
	angular.module('MyShoppingList')
		.controller('CartController', CartController);

	CartController.$inject = ['CartService'];

	function CartController(CartService){
		var cartId = 1;
		var self = this;
		
		CartService.getProductsForCart(1).then(function(products){
			self.products = products.data;
		})
	};
})();