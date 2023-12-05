<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'date',
        'distance_metres',
        'latitude',
        'longitude',
        'organiser_id'
    ];

    public function participants() {
        return $this->belongsToMany(User::class, 'event_registrations');
    }

    public function organiser() {
        return $this->belongsTo(User::class, 'organiser_id');
    }
}
