<?php

class User extends DataMapper {

    var $table = 'users';

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }

    var $validation = array(
        'first_name' => array(
            'label' => 'First Name',
            'rules' => array('required')
        ),
        'last_name' => array(
            'label' => 'Last Name',
            'rules' => array('required')
        ),
        'email' => array(
            'label' => 'Email Address',
            'rules' => array('required', 'trim', 'valid_email')
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'min_length' => 6),
        ),
    );

    function login()
    {
        // Create a temporary object
        $u = new User();

        // Get the user via their username
        $u->where('email', $this->email)->get();

        // Validate everything
        $this->validate()->get();

        if (empty($this->id))
        {
            // Login failed, so set a custom error
            $this->error_message('login', 'Email or password is invalid');
            return FALSE;
        }

        else
        {
            // Login succeeded
            return TRUE;
        }

    }

}
