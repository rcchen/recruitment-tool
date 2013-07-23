<?php

class Status extends DataMapper {

	var $table = 'statuses';

    var $created_field = 'created_on';
    
    var $has_one = array('position');

}

?>
