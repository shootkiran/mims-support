<?php

namespace App\Models\Support;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function Branch(){
        return $this->belongsTo(Branch::class);
    }
}
