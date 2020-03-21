<?php

namespace Jhormantasayco\Drozen\Models;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'greetings';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
