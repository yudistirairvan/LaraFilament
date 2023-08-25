<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
	/**
     * @var string
     */
    protected $table = 'treatments';

	/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'description', 'notes','patient_id','price'
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

}
