<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;

class Accessor extends Model
{
    //
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
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/


    /**
     * Set the user's PassWord.
     *
     * @param  string  $PassWord
     * @return void
     */
    public function setPassWordAttribute($PassWord)
    {
        $this->attributes['PassWord'] = bcrypt($PassWord);
    }
  


     /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getnameAttribute($name)
    {
        return ucfirst($name);
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
    
}
