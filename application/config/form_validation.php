<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'login' => array(
		array(
			'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|trim|alpha_numeric|xss_clean'
		),
		array(
			'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|xss_clean'
		),
	),
);