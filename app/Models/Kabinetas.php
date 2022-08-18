<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabinetas extends Model
{
    use HasFactory;
    
    protected $fillable = ['kabinetas', 'telefonas', 'dirba_nuo', 'dirba_iki', 'miestas'];
}
