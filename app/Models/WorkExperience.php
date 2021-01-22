<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'organization_name',
        'organization_activity',
        'description',
        'month_start', 
        'year_start',
        'month_end',
        'year_end',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
