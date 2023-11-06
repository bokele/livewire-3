<?php

namespace App\Models;

use App\Enums\PriorityType;
use App\Enums\StatusType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'priority',
        'deadline',
    ];

    protected $casts = [
        'deadline' => 'date',
        'status' => StatusType::class,
        'priority' => PriorityType::class,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
