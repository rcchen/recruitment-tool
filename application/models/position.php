<?php

class Position extends DataMapper {

    var $table = 'positions';

    var $has_many = array('application');
    var $has_one = array('company');

    var $validation = array(
        'title' => array(
            'label' => 'Title',
            'rules' => array('required'),
        ),
        'description' => array(
            'label' => 'Description',
            'rules' => array('required'),
        ),
    );

}

?>
