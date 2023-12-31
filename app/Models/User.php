<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'gender',
        'role',
        'profile_picture',
        'email',
        'password',
    ];

    public function scopeFilter($query, array $filters){
        
        if($filters['search'] ?? false){
            
            $keywords = explode(' ', $filters['search']);

            foreach($keywords as $keyword)
            {
                $query->orWhere('first_name', 'like', '%' . $keyword . '%')
                ->orWhere('last_name', 'like', '%' . $keyword . '%');
            }
        }
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function eventsRegistered(){
        return $this->belongsToMany(Event::class, 'event_registrations');
    }

    public function eventsOrganised() {
        return $this->hasMany(Event::class, 'organiser_id');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }
}
