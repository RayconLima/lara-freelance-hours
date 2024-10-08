<?php

namespace App\Models;

use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'ends_at',
        'status',
        'tech_stack',
        'created_by',
    ];

    public function casts() {
        return [
            'tech_stack'    => 'array',
            'status'        => ProjectStatus::class,
            'ends_at'       => 'datetime',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function proposals(): HasMany
    {
        return $this->hasMany(Proposal::class);
    }
}
