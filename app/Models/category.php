<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'comment', 'user_id']; // Ensure 'user_id' is fillable

    /**
     * Get the user that owns the category.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    // Your existing methods...
}
