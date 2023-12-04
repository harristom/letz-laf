<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image_id',
    ];

    //method establishes a relationship between the current class and the User class
    public function user(){
        //belongsTo() function specifies that the current class belongs to the User class.
        return $this->belongsTo(User::class);
    }
    //method establishes a relationship between the current class and the Image class
    public function image(){
        //belongsTo() function specifies that the current class belongs to the Image class.
        return $this->belongsTo(Image::class);
    }

}
