<?php

require_once '../database/connection.php';

class UserController {

    public function createUser($request) {
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $password = $request['password'];
        $confirm_password = $request['confirm_password'];

        if ($password !== $confirm_password) {
            return 'Passwords do not match.';
        }
        if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
            return 'All fields are required.';
        }
        // Optionally: check if email already exists, etc.
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User();
        $user->fname = $fname;
        $user->lname = $lname;
        $user->email = $email;
        $user->password = $hashedPassword;
        $user->save();
        return '';
    }
    public function updateUser($id) {}
    public function getUsers() {}
    public function getUserById($id) {}
    public function deleteUser($id) {}

}