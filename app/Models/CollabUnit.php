<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollabUnit extends Model
{
    use HasFactory;
   protected $table = "collab_units";
   protected $primaryKey = "collab_unit_id";


   public function getCreatedAtAttribute($v)
    {
        return  date("d-M-Y",strtotime($v));
    }
}
