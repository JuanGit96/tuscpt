<?php

/**
 * Actors model config
 */
return array(
    'title' => "Agentes",
    'single' => 'agente',
    'model' => 'App\Agents',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'user_id' => array(
            'title' => "Nombre",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        ),
        'user_id' => array(
            'title' => "Correo",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).email",
        ),
        'agencie_id' => array(
            'title' => "Agencia",
            'relationship' => 'agencie', //this is the name of the Eloquent relationship method!
            'select' => "CONCAT((:table).code, '-', (:table).name)",
        ),
        'code' => array(
            'title' => 'Código',
        ),
        'cedula' => array(
            'title' => 'Cédula',
        ),
        'cel' => array(
            'title' => 'Celular',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'code' => array(
            'title' => 'Código',
        ),
        'cedula' => array(
            'title' => 'Cédula',
        ),
        'cel' => array(
            'title' => 'Celular',
        ),
        'user' => array(
            'type' => 'relationship',
            'title' => 'Usuario',
            'name_field' => 'email',
        ),
        'agencie' => array(
            'type' => 'relationship',
            'title' => 'Agencia',
            'name_field' => 'code_name',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'user' => array(
            'type' => 'relationship',
            'title' => 'Usuario',
            'name_field' => 'email',
        ),
        'agencie' => array(
            'type' => 'relationship',
            'title' => 'Agencia',
            'name_field' => 'code_name',
        ),
        'cedula' => array(
            'title' => 'Cédula',
            'type' => 'text',
            'limit' => 10,
        ),
        'cel' => array(
            'title' => 'Celular',
            'type' => 'text',
            'limit' => 10,
        ),
        'code' => array(
            'title' => 'Código',
            'type' => 'text',
            'limit' => 10,
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
        'descuento' => array(
            'type' => 'number',
            'title' => 'Descuento',
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
    'foconterm_width' => 900,
);
