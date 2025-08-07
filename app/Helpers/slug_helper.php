<?php

if (!function_exists('slugify')) {
    function slugify($string)
    {
        $string = strtolower($string); // Lowercase
        $string = preg_replace('/[^a-z0-9\s-]/', '', $string); // Remove special chars
        $string = preg_replace('/[\s-]+/', ' ', $string); // Replace multiple spaces/hyphens with single space
        $string = preg_replace('/\s/', '-', $string); // Replace space with dash
        return $string;
    }
}