<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
	/**
     * @var string
     */
    protected $table = 'patients';

	/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date_of_birth', 'name','owner_id','type'
    ];

	public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
 
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
