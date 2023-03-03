<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'dmolarte2_MyGuestss';
    
    public function getGuest()
    {
        return $this->findAll();
    }
}

//