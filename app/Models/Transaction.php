<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peminjam()
    {
        return $this->belongsTo(User::class, 'UserIdPeminjam');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'UserIdPetugas');
    }

    public function detail_transaction()
    {
        return $this->hasOne(DetailTransaction::class);
    }
}
