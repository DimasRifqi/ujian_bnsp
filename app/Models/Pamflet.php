<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pamflet extends Model
{
    use HasFactory;

    protected $table = 'pamflet';

    protected $guarderd = ['id'];
}