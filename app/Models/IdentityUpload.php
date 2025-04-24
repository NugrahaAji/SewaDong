<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentityUpload extends Model
{
    protected $table = 'users';
    
    protected $fillable = [
        'user_id',
        'identity_path'
    ];
    
    protected $casts = [
        'uploaded_at' => 'datetime'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}