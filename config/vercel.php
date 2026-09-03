<?php

// Paksa log channel agar tidak pernah bernilai null/kosong di Vercel
if (empty($_ENV['LOG_CHANNEL']) || empty($_SERVER['LOG_CHANNEL'])) {
    putenv('LOG_CHANNEL=errorlog');
    $_ENV['LOG_CHANNEL'] = 'errorlog';
    $_SERVER['LOG_CHANNEL'] = 'errorlog';
}

return [];
