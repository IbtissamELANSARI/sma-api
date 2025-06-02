<?php
// config/session.php - Key settings to verify

return [
    // Make sure this matches your .env SESSION_DRIVER
    'driver' => env('SESSION_DRIVER', 'database'),
    
    // Session lifetime
    'lifetime' => env('SESSION_LIFETIME', 120),
    
    'expire_on_close' => false,
    
    'encrypt' => false,
    
    // CRITICAL for localhost development - should be null
    'domain' => env('SESSION_DOMAIN'),
    
    // Should be '/' for development
    'path' => '/',
    
    // Should be null for HTTP development
    'secure' => env('SESSION_SECURE_COOKIE'),
    
    // Should be true
    'http_only' => true,
    
    // For development, can be 'lax'
    'same_site' => 'lax',
];