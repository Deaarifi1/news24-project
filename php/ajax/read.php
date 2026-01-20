<?php
declare(strict_types=1);
session_start();
header('Content-Type: application/json');

echo json_encode([
  'ok' => true,
  'session' => $_SESSION,
  'message' => 'Read from PHP endpoint'
]);
