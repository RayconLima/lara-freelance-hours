<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        // 'tech_stack',
        'created_by',
    ];

    public function casts() {
        return [
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

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }

    public static function search($keyword)
    {
        return static::query()->when($keyword, function ($query) use ($keyword) {
            $query->where('title', 'LIKE', '%' . $keyword . '%');
        });
    }
}
