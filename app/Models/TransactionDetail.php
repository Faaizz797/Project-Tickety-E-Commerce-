<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'ticket_id',
        'transaction_id',
        'is_reedemed',
    ];

    // Relation to Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    // Relation to Transaction
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
