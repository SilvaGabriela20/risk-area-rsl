<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'polygon',
        'risk_type',
        'severity_level',
    ];

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}
