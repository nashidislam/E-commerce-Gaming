var app = angular.module("myModule", [])

				.controller("myController", function($scope, $location, $http){
				$scope.carts=[]; //create a variable name carts, this will be the storage of the product that the buyer choose
				$scope.showCart1= 0;

				$http.get("getData.php")
				.then(function (response) {$scope.products = response.data.products;});


				$scope.add_cart = function(product){ //set a function name add_cart
					if(product){ //check if the product is already declared within the function
						$scope.carts.push({p_id: product.p_id, p_name: product.p_name, p_price: parseInt(product.p_price)}); //pushes the chosen product into a new variable called carts when the add to cart button is clicked
					}
				}


				$scope.total = 0; //display the default value of total

				$scope.setTotals = function(cart){ //set a function name setTotals
					if(cart){ //check if cart is already set in the function
						$scope.total += cart.p_price; //sum the total value of each product
					}
				}

				$scope.remove_cart = function(cart){ //set a function called remove_cart
					if(cart){ //checked if the cart has a value
						$scope.carts.splice($scope.carts.indexOf(cart), 1); //delete a product based on the index
						$scope.total -= cart.p_price; //deduct the price of the product  simultaneously when deleted
					}
				}
				$scope.showCart = function() {
					$scope.showCart1= 1;
				window.location= url;
    }
	});
