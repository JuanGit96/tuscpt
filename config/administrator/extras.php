<?php

/**
 * Actors model config
 */
return array(
    'title' => "Extras",
    'single' => 'extra',
    'model' => 'App\Extras',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'price' => array(
            'title' => 'Precio',
        ),
        'num_orders' => array(
            'title' => '# Ordenes',
            'relationship' => 'orders', //this is the name of the Eloquent relationship method!
            'select' => "COUNT((:table).id)",
        )
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
            'limit' => 250,
        ),
        'price' => array(
            'type' => 'number',
            'title' => 'Precio',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 0, //optional, defaults to 0
            //'thousands_separator' => '.', //optional, defaults to ','
            //'decimal_separator' => '.', //optional, defaults to '.'
        ),
    ),
    'permission'=> function(){
        return Auth::user()->email == 'grimorum@grimorum.com';
    },
    'foconterm_width' => 800,
);
