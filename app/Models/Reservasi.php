<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id_reservasi';
    public $incrementing = false;

    /**
     * Get the kamar that owns the Reservasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kamar()
    {
        return $this->belongsTo(Kamar::class,'id_kamar');
    }
    public function tamu()
    {
        return $this->belongsTo(Tamu::class,'nik_tamu');
    }


}
