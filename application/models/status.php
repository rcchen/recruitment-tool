<?php

class Status extends DataMapper {

	var $table = 'statuses';

    $has_one = array('position');

}

?>
