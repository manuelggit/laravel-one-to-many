<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'start_date'];

    public function employee(){

      return $this -> belognsTo(Employee::class);

    }
}
