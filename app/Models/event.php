<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'type', 'start_date', 'end_date'];


/*public function category()
    {
        return $this->belongsTo(Category::class);
    }*/


}
