<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //se especifica la relacion a un reporte
    public function expenseReport(){
        return $this->belongsTo(expenseReport::class);
    }
}
