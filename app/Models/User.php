<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user){
            $user->activation_token = str_random(30);
        });
    }

    /**
     * Get Gravatar Image
     *
     * @param int $size
     *
     * @return string
     */
    public function gravatar($size = 100)
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));

        return sprintf("http://www.gravatar.com/avatar/$hash?s=%s", $size);
    }

    // 用户拥有多条微博
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }

    // 用户的微博信息流
    public function feed()
    {
        $userIds = Auth::user()->followings->pluck('id')->toArray();
        array_push($userIds, Auth::user()->id);


        return Status::whereIn('user_id', $userIds)->with('user')->orderBy('created_at', 'desc');
    }

    // 用户的粉丝
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }

    // 用户的关注者
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }

    // 关注
    public function follow($userIds)
    {
        is_array($userIds) or $userIds = compact('userIds');

        $this->followings()->sync($userIds, false);
    }

    // 取消关注
    public function unfollow($userIds)
    {
        is_array($userIds) or $userIds = compact('userIds');

        $this->followings()->detach($userIds);
    }

    // 是否关注
    public function isFollowing($userId)
    {
        return $this->followings->contains($userId);
    }
}
