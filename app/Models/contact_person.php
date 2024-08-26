<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_person extends Model
{
    use HasFactory;
    protected $table = "contact_people";
    protected $primaryKey = "contact_person_id";



    public function getCreatedAtAttribute($v)
    {
        return  date("d-M-Y",strtotime($v));
    }
}
