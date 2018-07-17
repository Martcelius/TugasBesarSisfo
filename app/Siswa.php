<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    //
    use Notifiable;
   	protected $table = 'siswas';
   	protected $primaryKey = 'nis';
   	protected $fillable  = ['nama','password','status','kelas'];

   	protected $hidden = [
        'password', 'remember_token',
    ];
}

// <?php
// */
// namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class Siswa extends Authenticatable
// {
//     use Notifiable;

//     *
//      * The attributes that are mass assignable.
//      *
//      * @var array
     
//     protected $fillable = [
//         'name', 'status', 'password','kelas'
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
