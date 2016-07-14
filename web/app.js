(function(){
	angular
		.module( 'MyShoppingList', [ 
			'ngRoute', 
			'ngMaterial'
		])
		.config(configRoute);

		configRoute.$inject = ['$routeProvider'];

		function configRoute($routeProvider) {
	    	$routeProvider.when('/products', {
	        	templateUrl: '/products/products.html',
	        	controller: 'ProductsController'
	    	})
	    	.when('/cart', {
	        	templateUrl: '/cart/cart.html',
	        	controller: 'CartController'
	    	})
	    	.otherwise({
                redirectTo: '/products'
            });
		}
})();