<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Post extends Model
{
    use Orbital;

    public static $driver = 'md';

    public function getKeyName(): string
    {
        return 'slug';
    }

    public static function schema(Blueprint $table): void
    {
        $table->string('title');
        $table->string('slug');
        $table->timestamp('date');
        $table->text('description');
    }
}
