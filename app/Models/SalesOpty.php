<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOpty extends Model
{
    use HasFactory;

    protected $fillable =[
        "NamaClient","NamaProject","Date", "Q1","Q2","Q3","Q4","Status","Note", "timeline"
    ];

    public function timelines()
    {
        return $this->belongsTo(Timeline::class, 'timeline');
    }
}
