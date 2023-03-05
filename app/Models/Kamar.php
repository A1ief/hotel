<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_kamar';
    public $incrementing = false;

    /**
     * Get all of the reservasi for the Kamar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class,'id_reservasi');
    }
}
