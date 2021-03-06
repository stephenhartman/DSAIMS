<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skill', 'skill_level',
    ];

    public function member()
    {
        $this->belongsTo(Member::class);
    }
}
