<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FDMember extends Model
{
    use HasFactory;
    protected $table = "f_d_members";
    protected $primaryKey = "FDMember_id";


    public function getCreatedAtAttribute($v)
    {
        return  date("d-M-Y",strtotime($v));
    }
}
