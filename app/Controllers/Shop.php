<?php

namespace App\Controllers;

use \App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index(): string
    {
       echo "This is an admin shop area";
    }

    public function product($type = 'laptop', $product_id = 'Dell'): string
    {
        echo '<h2>This is a product: '.$type.'with an id: '.$product_id.'</h2>';
        // return view('product');
    }

}
