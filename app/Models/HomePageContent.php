<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    protected $fillable = ['section', 'key', 'value', 'type'];

    /**
     * Get all key => value pairs for a given section.
     */
    public static function getSection(string $section): array
    {
        return static::where('section', $section)
            ->pluck('value', 'key')
            ->toArray();
    }

    /**
     * Get a single value by section + key with optional default.
     */
    public static function getValue(string $section, string $key, string $default = ''): string
    {
        $record = static::where('section', $section)->where('key', $key)->first();
        return $record ? ($record->value ?? $default) : $default;
    }

    /**
     * Upsert a value for section + key.
     */
    public static function setValue(string $section, string $key, ?string $value, string $type = 'text'): void
    {
        static::updateOrCreate(
            ['section' => $section, 'key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }
}
