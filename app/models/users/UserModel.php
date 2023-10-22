<?php

class UserModel {

    protected $id;
    protected $fname;
    protected $lname;
    protected $email;
    protected $password;


    public function __construct() {}
    public function login($email, $password) {}
    public function logout() {}
    // public function getUser($id) {}
}