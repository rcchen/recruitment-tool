<?php

class Application extends DataMapper {

	var $table = 'applications';

    var $has_one = array('user', 'position');
    var $has_many = array('status');

}
