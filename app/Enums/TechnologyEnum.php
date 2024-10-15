<?php

namespace App\Enums;

enum TechnologyEnum: string
{
    case JavaScript = 'javaScript';
    case Laravel    = 'laravel';
    case PHP        = 'php';
    case React      = 'react';
    case Tailwind   = 'tailwind';
    case Vue        = 'vue';

    // 'react', 'php', 'laravel', 'vue', 'tailwind', 'javascript'
}
