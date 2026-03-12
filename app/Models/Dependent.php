<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'dependent_id';
    protected $fillable = [
        'first_name', 'last_name', 
        'relationship', 'employee_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}