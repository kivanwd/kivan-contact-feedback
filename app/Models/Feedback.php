<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Tambahkan baris ini supaya Laravel tahu nama tabel sebenarnya
    protected $table = 'feedbacks'; // <-- nama tabel di database kamu

    protected $fillable = [
        'name',      
        'email',     
        'message',   
        'response',  
    ];
}

