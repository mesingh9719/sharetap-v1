<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SubdomainService;
use Illuminate\Support\Str;

class SubdomainController extends Controller
{
    protected $subdomainService;

    public function __construct(SubdomainService $subdomainService)
    {
        $this->subdomainService = $subdomainService;
    }

    public function check(Request $request)
    {
        $subdomain = Str::slug($request->subdomain);

        if (!$this->subdomainService->validate($subdomain)) {
            return response()->json([
                'available' => false,
                'message' => 'Invalid subdomain format',
                'suggestions' => []
            ]);
        }

        $available = $this->subdomainService->isAvailable($subdomain);
        $suggestions = $available ? [] : $this->subdomainService->generateSuggestions($subdomain);

        return response()->json([
            'available' => $available,
            'message' => $available ? 'Subdomain is available' : 'Subdomain is not available',
            'suggestions' => $suggestions
        ]);
    }
}
