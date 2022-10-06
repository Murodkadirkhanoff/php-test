<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function calculate()
    {
        return ($this->quantity * $this->price) * (1 + config('calculate.vat'));
    }
}
