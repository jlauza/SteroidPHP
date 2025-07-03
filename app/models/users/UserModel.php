<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";
    protected $fillable = [
        "fname", "lname", "email","password", // id should be auto-generated and auto-incremented
    ];
}