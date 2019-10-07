<?php

/**
 * Actors model config
 */
return array(
    'title' => "Agencias",
    'single' => 'agencia',
    'model' => 'App\Agencies',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'code' => array(
            'title' => 'Código',
        ),
        'description' => array(
            'title' => 'Descripcion',
        ),
        'comision' => array(
            'title' => 'Comisión',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'code' => array(
            'title' => 'Código',
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
        'code' => array(
            'title' => 'Codigo',
            'type' => 'text',
            'limit' => 5,
        ),
        'description' => array(
            'title' => 'Descripción',
            'type' => 'textarea',
        ),
        'comision' => array(
            'type' => 'number',
            'title' => 'Comisión',
            'symbol' => '%', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'value' => 8,
            //'thousands_separator' => '.', //optional, defaults to ','
            //'decimal_separator' => '.', //optional, defaults to '.'
        ),
    ),
    'permission'=> function(){
        return Auth::user()->email == 'grimorum@grimorum.com';
    },
    'foconterm_width' => 800,
);
