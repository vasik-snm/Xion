<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected $table = 'home_contact';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'message'];
}
