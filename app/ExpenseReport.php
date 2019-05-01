<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    //se especifica la relación
    public function expenses(){
        //se regresa una relacion definida como muchos
        return $this->hasMany(Expense::class);
    }
}
