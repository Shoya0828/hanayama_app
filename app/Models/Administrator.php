<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model implements Authenticatable
{
    use HasFactory;

    // テーブル名
    protected $table = 'administrators';

    // 可変項目
    protected $fillable = [
        'id',
        'userid',
        'password',

    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the remember token for the user.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return null; // not supported
    }

    /**
     * Set the remember token for the user.
     *
     * @param  string|null  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // not supported
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return null; // not supported
    }
}
