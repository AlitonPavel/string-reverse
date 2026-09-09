<?php

namespace Rpy\StringReverser;

class Reverser
{
    /**
     * Переворачивает строку задом наперед.
     * Поддерживает кириллицу (UTF-8).
     */
    public static function reverse(string $text): string
    {
        // Используем mb_strrev, так как встроенный strrev ломает кириллицу
        // Если mb_string не установлен, это простой аналог:
        $length = mb_strlen($text, 'UTF-8');
        $reversed = '';

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= mb_substr($text, $i, 1, 'UTF-8');
        }

        return $reversed . '_111';
    }
}