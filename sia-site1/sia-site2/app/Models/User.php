<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser';
        protected $fillable = [
            'userId','username','password','gender'
        ];

        public $timestamps = false;
        protected $primaryKey = 'userId';

        protected $hidden = [
            'password',
        ];
    }