<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'amount',
        'donation_id',
        'type'
    ];

    protected $table = 'transactions';

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function donation(): BelongsTo
    {
        return $this->belongsTo(Donation::class);
    }
}
