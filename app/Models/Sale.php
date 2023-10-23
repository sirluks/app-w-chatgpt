<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\Status;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'seller_id',
        'sold_at',
        'status',
        'total_amount',
    ];

    protected $casts = [
        'status' => Status::class,
    ];

    function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    
    function seller() : BelongsTo
    {
        return $this->belongsTo(Seller::class);        
    }
}
