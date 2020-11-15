<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
    //mess assignment
    //$fillable = data/kolom yang boleh/bisa di isi
    //$GUARDED = kebalikan fillavle
}
