<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $primaryKey = "member_id";

    public function getCreatedAtAttribute($v)
    {
        return  date("d-M-Y" ,strtotime($v));
    }
}
