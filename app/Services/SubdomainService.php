<?php

namespace App\Services;

use App\Models\Website;
use Illuminate\Support\Str;

class SubdomainService
{
    protected $reservedSubdomains = [
        'www', 'mail', 'ftp', 'admin', 'api', 'app', 'blog',
        'dashboard', 'portal', 'shop', 'store', 'billing'
    ];

    public function validate($subdomain)
    {
        // Check if subdomain matches required pattern
        return preg_match('/^[a-z0-9][a-z0-9-]{1,61}[a-z0-9]$/', $subdomain);
    }

    public function isAvailable($subdomain)
    {
        // Check if subdomain is reserved or already exists
        return !in_array($subdomain, $this->reservedSubdomains) &&
               !Website::where('subdomain', $subdomain)->exists();
    }

    public function generateSuggestions($desiredSubdomain)
    {
        $suggestions = [];
        $baseSubdomain = Str::slug($desiredSubdomain);

        // Add original if available
        if ($this->isAvailable($baseSubdomain)) {
            $suggestions[] = $baseSubdomain;
        }

        // Add numbered variations
        $counter = 1;
        while (count($suggestions) < 5) {
            $suggestion = $baseSubdomain . $counter;
            if ($this->isAvailable($suggestion)) {
                $suggestions[] = $suggestion;
            }
            $counter++;
        }

        return $suggestions;
    }
}
