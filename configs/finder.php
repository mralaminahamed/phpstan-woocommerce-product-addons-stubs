<?php

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/woocommerce-product-addons',
    ) )
    ->append(
        Finder::create()
            ->in(['source/woocommerce-product-addons'])
            ->files()
            ->depth('< 1')
            ->path('woocommerce-product-addons.php')
    )
    ->notPath('templates')
    ->sortByName(true)
;
