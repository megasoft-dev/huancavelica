<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'first_last_name', 'second_last_name', 'school_id'
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(mb_strtolower($value));
    }

    public function setFirstLastNameAttribute($value)
    {
        $this->attributes['first_last_name'] = mb_strtoupper(mb_strtolower($value));
    }

    public function setSecondLastNameAttribute($value)
    {
        $this->attributes['second_last_name'] = mb_strtoupper(mb_strtolower($value));
    }

    public function getLastNameAttribute(): string
    {
        return $this->first_last_name . ' ' . $this->second_last_name;
    }
}
