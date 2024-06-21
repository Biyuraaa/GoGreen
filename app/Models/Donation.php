<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'wallet_id',
        'blog_id',
    ];

    protected $table = 'donations';

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class);
    }
}
