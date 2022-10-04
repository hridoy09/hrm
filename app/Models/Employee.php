<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use HasFactory, Notifiable;
    protected $guarded=[];

    /**
     * Get the user that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brance()
    {
        return $this->belongsTo(Brance::class, 'shop_id', 'id');
    }
    public function brancelocation()
    {
        return $this->belongsTo(Brance::class, 'shop_location_id', 'id');
    }
}
