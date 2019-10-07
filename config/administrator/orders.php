<?php

/**
 * Actors model config
 */
return array(
    'title' => "Ordenes",
    'single' => 'orden',
    'model' => 'App\Orders',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
        ),
        'email' => array(
            'title' => 'Email',
        ),
        'date' => array(
            'title' => 'Fecha',
        ),
        'state' => array(
            'title' => 'Estado',
        ),
        'codepromo' => array(
            'title' => 'Promoción',
        ),
        'formatted_value' => array(
            'title' => 'Valor'
        ),
        'city' => array(
            'title' => 'Ciudad',
            'visible' => function($model){
                return Auth::user()->email == 'grimorum@grimorum.com';
            },
        ),
        'neighborhood' => array(
            'title' => 'Barrio',
            'visible' => function($model){
                return Auth::user()->email == 'grimorum@grimorum.com';
            },
        ),
        'payment' => array(
            'title' => 'Pago',
            'visible' => function($model){
                return Auth::user()->email == 'grimorum@grimorum.com';
            },
        ),
        'kit_id' => array(
            'title' => "Kit",
            'relationship' => 'kit', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
            'visible' => function($model){
                return Auth::user()->email == 'grimorum@grimorum.com';
            },
        ),
        'extras' => array(
            'title' => "Extras",
            'relationship' => 'extras', //this is the name of the Eloquent relationship method!
            'select' => "GROUP_CONCAT((:table).name SEPARATOR ',')",
             'visible' => function($model){
                return Auth::user()->email == 'grimorum@grimorum.com';
            },
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
        'date' => array(
            'title' => 'Fecha',
            'type' => 'date',
        ),
        'state' => array(
            'title' => 'Estado',
        ),
        'codepromo' => array(
            'title' => 'Código promoción',
        ),
        'payment' => array(
            'title' => 'Pago',
        ),
        'kit' => array(
            'type' => 'relationship',
            'title' => 'Kit',
            'name_field' => 'name',
        ),
        'extras' => array(
            'type' => 'relationship',
            'title' => 'Extras',
            'name_field' => 'name',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'id',
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'code' => array(
            'title' => 'Codigo',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'codepromo' => array(
            'title' => 'Codigo Promocional',
            'type' => 'text',
            'limit' => 10,
            'editable' => false,
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'tel' => array(
            'title' => 'Telefono',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'city' => array(
            'title' => 'Ciudad',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'neighborhood' => array(
            'title' => 'Barrio',
            'type' => 'text',
            'limit' => 150,
            'editable' => false,
        ),
        'address' => array(
            'title' => 'Dirección',
            'type' => 'textarea',
        ),
        'comments' => array(
            'title' => 'Comentarios',
            'type' => 'textarea',
            'editable' => false,
        ),
        
        'extras' => array(
            'type' => 'relationship',
            'title' => 'Extras',
            'name_field' => 'name',
            'options_sort_field' => "name",
            'editable' => false,
        ),
        'state' => array(
            'type' => 'enum',
            'title' => 'Estado',
            'options' => array(
                'La compra de tu pedido ha sido aprobada' => 'La compra de tu pedido ha sido aprobada',
                'Tu kit esta siendo armado' => 'Tu kit esta siendo armado',
                'Tu kit ya fue despachado' => 'Tu kit ya fue despachado',
                'Tu kit ha sido entregado' => 'Tu kit ha sido entregado',
                
            ),
        ),
        'payment' => array(
            'type' => 'enum',
            'title' => 'Pago',
            'options' => array(
                'Contra entrega' => 'Contra entrega',
                'Tarjeta de crédito' => 'Tarjeta de crédito',
                'PSE' => 'PSE',
                'Baloto' => 'Baloto',
            ),
        ),
        'kit' => array(
            'type' => 'relationship',
            'title' => 'Kit',
            'name_field' => 'name',
            'editable' => false,
        ),
        'value' => array(
            'type' => 'number',
            'title' => 'Valor',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 0, //optional, defaults to 0
            //'thousands_separator' => '.', //optional, defaults to ','
            //'decimal_separator' => '.', //optional, defaults to '.'
            'editable' => false,
        ),
        'date' => array(
            'type' => 'date',
            'title' => 'Date',
            //'date_format' => 'yy-mm-dd', //optional, will default to this value
            'editable' => false,
        ),
        'response' => array(
            'title' => 'Respuesta',
            'type' => 'textarea',
            'editable' => false,
        ),
        'response_code' => array(
            'title' => 'Código de respuesta',
            'type' => 'text',
            'editable' => false,
        ),
        'response_date' => array(
            'title' => 'Fecha respuesta',
            'type' => 'date',
            'editable' => false,
        ),
    ),
    'action_permissions'=> array(
        'delete' => function($model){
            return Auth::user()->email == 'grimorum@grimorum.com';
        },
        'create' => function($model){
            return Auth::user()->email == 'grimorum@grimorum.com';
        },
        'update' => function($model){
            return Auth::user()->email == 'grimorum@grimorum.com';
        },
        'view' => function($model){
            return Auth::user()->email == 'grimorum@grimorum.com';
        },
    ),
    'query_filter'=> function($query){
        if (Auth::user()->email != 'grimorum@grimorum.com'){
            $query->where('codepromo','=',Auth::user()->agents()->first()->code)->orWhere('codepromo','=',Auth::user()->agents()->first()->code . "d");
        }
    },
    'form_width' => 800,
);
