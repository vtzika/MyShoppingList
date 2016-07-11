(function(){
	angular.module('MyShoppingList')
		.service('ProductsService', ProductsService);

	ProductsService.$inject = ['$http'];

	function ProductsService($http){
		var self = this;
		return {
			getProducts: getProducts
		};

		function getProducts(){
			var url = "api/products";
			return $http.get(url);
		};
	};
})();