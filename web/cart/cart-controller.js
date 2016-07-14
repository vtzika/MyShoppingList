(function(){
	angular.module('MyShoppingList')
		.controller('CartController', CartController);

	CartController.$inject = ['CartService'];

	function CartController(CartService){
		var self = this;
		var checkout = checkout;
		
		CartService.getProductsForCart(1).then(function(products){
			self.products = products.data;
		})

		function checkout(){
			CartService.checkout(self.products).then(function(status){
				self.checkoutStatus = status;
			})
		}
	};
})();