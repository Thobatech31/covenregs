<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onvisittable extends Model
{
        //Table Name 
   protected $table = 'onvisittables';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamp
   public $timestamps = true;
}
