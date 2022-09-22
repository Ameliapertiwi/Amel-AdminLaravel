<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Modules extends Model
{
    use HasFactory,Uuids;

    protected $table = 'modules';
    protected $primaryKey = "id";
    protected $fillable = [
        'session_id',
        'video_id',
        'document_id',
    ];
}