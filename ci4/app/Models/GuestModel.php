<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'dmolarte2_MyGuestss';


    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];
    
    public function getGuest()
    {
        return $this->findAll();
    }

}

//