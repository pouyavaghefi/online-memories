<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    protected $table = 'notebooks';
    protected $guarded = [];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function memories()
    {
        return $this->hasMany(Memory::class);
    }
}
