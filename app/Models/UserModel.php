<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'image'];

    //protected $useSoftDeletes = true;
    // protected $deletedField  = 'deleted_at';

}
