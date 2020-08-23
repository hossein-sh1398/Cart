<?php
namespace Hossein_package\Cart;
use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'cart';
	}
}