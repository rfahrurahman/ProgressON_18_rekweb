<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
     protected$table = 'user';
     protected$primarykey = 'id';
     protected$allowedFields = [
         'username', 'avatar', 'password', 'salt', 'created_data','created_by', 
         'updated_date', 'updated_by'
        ];
     protected $returnType = 'App\Entities\User';
     protected $useTimetamps = false;   
}