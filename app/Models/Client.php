<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'user_id',
    ];

    public function address(): BelongsTo
    {
        return $this->BelongsTo(Address::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    function sales() : HasMany
    {
        return $this->hasMany(Sale::class);        
    }
}
