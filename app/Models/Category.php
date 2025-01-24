<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    public function departments(): BelongsTo
    {
        return $this->belongsTo(Department::class , 'parent_id');
    }
}
