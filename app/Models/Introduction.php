<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Introduction extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */
    public $fillable = [
        'content',
    ];

    /**
     * @var string[]
     */
    public $casts = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function content(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Str::squish($value),
        );
    }
}
