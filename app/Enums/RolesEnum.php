<?php

namespace App\Enums;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case USER = 'user';

    public static function all(): array
    {
        return [
            self::ADMIN->value,
            self::MANAGER->value,
            self::USER->value,
        ];
    }
}
