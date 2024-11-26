<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Specify the correct table name if it's different from the default
    protected $table = 'user';

    // Specify the primary key column name
    protected $primaryKey = 'id_user'; // This should match the actual column in the database

    // If your table doesn't have created_at and updated_at columns
    public $timestamps = false;

    // Define relationships or other model methods here if needed
}
