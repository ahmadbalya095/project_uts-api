<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    public function contacts(): HasMany{
        return $this->hasMany(Contact::class, "user_id", "id");
    }

    protected $fillable = [
        'username',
        'password',
        'name'
    ];
}
