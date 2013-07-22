<?php

class Company extends DataMapper {

    var $table = 'companies';

    var $has_many = array('user', 'position');

    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim'),
        ),
        'url' => array(
            'label' => 'URL',
            'rules' => array('required'),
        ),
    );

}
