<?php

use Illuminate\Support\Facades\Session;

/**
 * Set Sidebar item active
 */
function setActive(array $route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}

// Check the product type
function productType(string $type): string
{
    return match ($type) {
        'new_arrival' => 'New',
        'featured_product' => 'Featured',
        'top_product' => 'Top',
        'best_product' => 'Best',
        default => '',
    };
}