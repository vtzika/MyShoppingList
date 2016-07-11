(function(){
	angular
		.module( 'MyShoppingList', [ 
			'ngRoute', 
			'ngMaterial'
			])
		.config(configRoute);

		configRoute.$inject = ['$routeProvider'];

		function configRoute ($routeProvider) {
	    	$routeProvider.when('/products', {
	        	templateUrl: 'products.html',
	        	controller: 'ProductsController'
	    	}).
	    	otherwise({
	        	redirectTo: '/products'
	    	});
		}
})();