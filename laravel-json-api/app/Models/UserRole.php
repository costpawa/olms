<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Models\Role;

class UserRole extends Role
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
