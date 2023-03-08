<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $casts = [
      'expires_at' => 'date:d-m-Y',
    ];
    protected $guarded = [];

    public function scopeExpired($query)
    {
        $query->where('expires_at', '<', today()->format('Y-m-d'));
        return $query;
    }
    public function scopeActive($query)
    {
        $query->where('expires_at', '>=', today()->format('Y-m-d'));
        return $query;
    }
}
