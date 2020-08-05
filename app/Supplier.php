<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=
    [
        'supplier_name','address','phone_number','email','location','company'
    ]; 
}
