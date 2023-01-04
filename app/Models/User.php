<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Profile;
use App\Traits\ModelHelpers;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use Billable;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use ModelHelpers;

    const DEFAULT = 1;
    const MODERATOR = 2;
    const WRITER = 3;
    const ADMIN = 4;
    const SUPERADMIN = 5;

    const TABLE = 'users';
    protected $table = self::TABLE;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'line1',
        'line2',
        'city',
        'state',
        'country',
        'postal_code',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function id():int
    {
        return $this->id;
    }

    public function name():string
    {
        return $this->name;
    }

     public function emailAddress():string
     {
        return $this->email;
     }

    public function type():int
    {
        return (int) $this->type;
    }

    public function lineOne(): ?string
    {
        return $this->line1;
    }

    public function lineTwo(): ?string
    {
        return $this->line2;
    }

    public function city(): ?string
    {
        return $this->city;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function country(): ?string
    {
        return $this->country;
    }

    public function postalCode(): ?string
    {
        return $this->postal_code;
    }

    public function isModerator():bool
    {
        return $this->type() === self::MODERATOR;
    }

    public function isWriter():bool
    {
        return $this->type() === self::WRITER;
    }

    public function isSuperAdmin(): bool
    {
        # code...
        return $this->type() === self::SUPERADMIN;
    }

    public function isAdmin():bool
    {
        return $this->type() === self::ADMIN;
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function posts()
    {
        # code...
        return $this->postRelation;
    }

    public function postRelation(): HasMany
    {
        # code..
        return $this->hasMany(Post::class, 'author_id');
    }
}
