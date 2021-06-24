<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //ketika nama tabel berbeda
    protected $table = 'institutions';
    // ketika kolom primaryKey bukan id, maka
    
    // untuk menentukan pada kolom apa saja yang boleh di masukkan data
    protected $fillable = ['id','name', 'description'];

   
}
