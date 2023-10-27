<?php

require_once '../database/connection.php';

class UserController {

    public function createUser($request) {
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $password = password_hash($request['password'], PASSWORD_BCRYPT);

        $user = new User();
        $user->fname = $fname;
        $user->lname = $lname;
        $user->email = $email;
        $user->password = $password;
        $user->save();
    }
    public function updateUser($id) {}
    public function getUsers() {}
    public function getUserById($id) {}
    public function deleteUser($id) {}

}