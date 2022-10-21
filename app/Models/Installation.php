<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Installation extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'uuid',
        'type'
    ];

    /**
     * Get the country associated with the Installation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Country, \App\Models\Installation>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the version associated with the Installation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Version, \App\Models\Installation>
     */
    public function version(): BelongsTo
    {
        return $this->belongsTo(Version::class);
    }
}
