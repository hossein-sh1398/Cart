<?php
namespace Hossein_package\Cart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('cart', function(){
			return new CartService;
		});
	}

	public function boot()
	{
		//
	}
}