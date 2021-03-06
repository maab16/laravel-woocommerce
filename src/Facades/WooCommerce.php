<?php 
namespace Codexshaper\WooCommerce\Facades;

use Illuminate\Support\Facades\Facade;
use Codexshaper\WooCommerce\WooCommerceApi;
class WooCommerce extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return WooCommerceApi::class;
    }
}