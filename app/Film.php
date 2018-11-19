<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
//use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Film extends Model 
{
    protected $guard = ['id']; //guard adalah kolom yang tidak boleh diisi
    protected $fillable = ['title','genre','year','producer'];
}
