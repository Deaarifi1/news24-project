<?php
declare(strict_types=1);
session_start();
header('Content-Type: application/json');

$raw = file_get_contents('php://input');
$data = json_decode($raw, true) ?: [];

$_SESSION['ajax_value'] = $data['value'] ?? 'empty';

echo json_encode([
  'ok' => true,
  'saved' => $_SESSION['ajax_value']
]);
