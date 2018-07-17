<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecture extends Authenticatable
{
    //
    use Notifiable;
   	protected $table = 'materis';
   	protected $primaryKey = 'id_materi';
   	protected $fillable  = ['nama_materi','mapel','kelas'];

   	/*protected $hidden = [
        'password', 'remember_token',
    ];*/
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
