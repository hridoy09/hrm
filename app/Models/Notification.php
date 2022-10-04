<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    use HasFactory;

    public function scopeUnseen($query){
        $query->where('read_at',NULL);
    }

    public function scopeUnseenByShop($query,$shop_id=NULL){
        $query->where('read_by_shop',NULL)->where('shop_id',$shop_id);
    }
}
