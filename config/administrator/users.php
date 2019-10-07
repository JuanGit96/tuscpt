<?php

/**
 * Actors model config
 */
return array(
    'title' => 'Usuarios',
    'single' => 'usuario',
    'model' => 'App\User',
    /**
     * The display columnss
     */
    'columns' => array(
        'id',
        'email' => array(
            'title' => 'Email',
        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'email' => array(
            'title' => 'Email',
        ),
        'name' => array(
            'title' => 'Name',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Clave',
            'type' => 'password',
            'editable' => true,
        ),
    ),
    'rules' => array(
        'email' => 'required|email|unique:users,email',
    ),
    'permission'=> function(){
        return Auth::user()->email == 'grimorum@grimorum.com';
    },

    'form_width' => 600,

    
);

?>