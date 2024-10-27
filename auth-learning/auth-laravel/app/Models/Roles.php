<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    
    //Table name
    protected $table ="roles";

    //Primary key
    protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
