<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use YoHang88\LetterAvatar\LetterAvatar;

class User extends Authenticatable
{   
    use EntrustUserTrait; //hacemos uso del trait en la clase User para hacer uso de sus métodos
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

     //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\Role');
    }


    public function company()
    {
        return $this->hasOne('App\Models\Company');
    }
    
    public function graduate()
    {
        return $this->hasOne('App\Models\Graduate');

    }
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher');

    }

    public function getAvatarAttribute()
    {
        return new LetterAvatar($this->name);

    }
}
