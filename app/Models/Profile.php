<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    const TABLE = 'profiles';

    protected $table = self::TABLE;

    protected $fillable = [
        'bio',
        'facebook',
        'twitter',
        'instagram',
        'linkedln',
    ];

    public function bio():string  
    {
        return $this->bio;
    }
    
    public function facebook():string 
    {
        return $this->facebook;
    }
    
    public function twitter():string 
    {
        return $this->twitter;
    }
    
    public function instagram():string 
    {
        return $this->instagram;
    }
    
    public function linkedln():string 
    {
        return $this->linkedln;
    }

    public function user(): BelongsTo
   {
    return $this->belongsTo(User::class);
   }
   
}
