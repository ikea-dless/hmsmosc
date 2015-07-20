<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $table = 'user_menus';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
