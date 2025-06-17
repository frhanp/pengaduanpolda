<?php

namespace App\Enums;

// Enum ini akan merepresentasikan nilai yang mungkin untuk kolom 'role'
enum UserRole: string
{
    case ADMIN = 'admin';
    case RESKRIM = 'reskrim';
}