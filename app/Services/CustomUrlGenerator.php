<?php

namespace App\Services;

use Illuminate\Routing\UrlGenerator;

class CustomUrlGenerator extends UrlGenerator
{
    /**
     * Generate the URL to an application asset.
     *
     * @param  string  $path
     * @param  bool|null  $secure
     * @return string
     */
    public function asset($path, $secure = null)
    {
        if ($this->isValidUrl($path)) {
            return $path;
        }

        // Clean any leading slash or leading 'public/' so we have a normalized relative path
        $trimmed = ltrim($path, '/');
        if (str_starts_with($trimmed, 'public/')) {
            $trimmed = substr($trimmed, 7);
        }

        $isProduction = config('app.env') === 'production';

        if ($isProduction) {
            $appUrl = config('app.url');
            if (empty($appUrl) || $appUrl === 'http://localhost') {
                $appUrl = 'https://mamasherbal.com';
            }
            $root = rtrim($appUrl, '/') . '/public';
            return $this->removeIndex($root) . '/' . $trimmed;
        }

        $root = $this->formatRoot($this->formatScheme($secure));
        return $this->removeIndex($root) . '/' . $trimmed;
    }
}
