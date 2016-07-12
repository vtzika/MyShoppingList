(function(){
	angular.module('MyShoppingList')
		.service('CartService', CartService);

	CartService.$inject = ['$http'];

	function CartService($http){
		var self = this;
		return {
			addToCart: addToCart

		};

		function addToCart(product){
			var url = "api/carts";
			var body = {
				"id": product.id,
				"quantity": product.quantity
			}
			return $http.post(url, body);
		};
	};
})();