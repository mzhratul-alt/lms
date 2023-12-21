<?php

namespace App\Models\Voter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;

    public function ward(){
        return $this->belongsTo(Ward::class)->select(['id','name']);
    }
    public function part(){
        return $this->belongsTo(Part::class)->select(['id','name']);
    }
    public function gender(){
        return $this->belongsTo(Gender::class)->select(['id','type']);
    }
}
