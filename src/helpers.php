<?php
function t(string $key, array $dict): string {
    return htmlspecialchars($dict[$key] ?? $key, ENT_QUOTES, 'UTF-8');
}
