<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'risk_area_id',
        'user_id',
        'message',
        'alert_type',
        'sent_at',
    ];

    public function riskArea()
    {
        return $this->belongsTo(RiskArea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
