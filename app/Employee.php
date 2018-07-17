<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    //
    use Notifiable;
   	protected $table = 'employees';
   	protected $primaryKey = 'nip';
   	protected $fillable  = ['nama','password','status','mapel'];

   	protected $hidden = [
        'password', 'remember_token',
    ];
}

// <?php
// */
// namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class Employee extends Authenticatable
// {
//     use Notifiable;

//     protected $guard = 'employee';

//     *
//      * The attributes that are mass assignable.
//      *
//      * @var array
     
//     protected $fillable = [
//         'name', 'status', 'password','mapel'
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password', 'remember_token',
//     ];
// }
