<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Match, Team, Post, Comment, SocialAccount;

class User extends Authenticatable
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'email',
        'password',
        'role',
        'point',
        'confirmed',
        'confirmation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function matches()
    {
        return $this->belongsToMany(Match::class, 'user_bets', 'user_id', 'match_id')->withPivot('point', 'team_id', 'result');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'user_bets', 'user_id', 'team_id')->withPivot('point', 'match_id', 'result');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function socialAccount()
    {
        return $this->belongsTo(SocialAccount::class);
    }

    public function scopeUser($query)
    {
        return $query->where('role', 0);
    }

    public function scopeAdmin($query)
    {
        return $query->where('role', 1);
    }

    public function scopeTeam($query)
    {
        return $query->where('role', 2);
    }

    public function scopeConfirmationCode($query, $confirmationCode)
    {
        return $query->where('confirmation_code', $confirmationCode);
    }

    public function scopeUserEmail($query, $socialEmail)
    {
        return $query->where('email', $socialEmail);
    }
}
