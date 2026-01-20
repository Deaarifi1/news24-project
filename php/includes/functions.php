<?php
declare(strict_types=1);

function e(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

class ValidationException extends Exception {}

function normalize_tags(string $input): string {
  $input = trim($input);                 // trim
  $parts = explode(',', $input);         // explode
  $clean = [];
  foreach ($parts as $p) {
    $p = trim($p);
    if ($p !== '') $clean[] = str_replace(' ', '-', $p);  // str_replace
  }
  sort($clean);                          // sorting
  return implode(', ', $clean);          // implode
}

function str_demo(string $s): array {
  $len = strlen($s);                     // strlen
  $sub = substr($s, 0, 10);              // substr
  $repl = str_replace('a','@',$s);       // str_replace
  return ['len'=>$len,'substr'=>$sub,'replace'=>$repl];
}

// RegEx: preg_match, preg_replace, preg_split
function is_valid_email(string $email): bool {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
  return (bool)preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email); // preg_match
}

function clean_name(string $name): string {
  $name = trim($name);
  $name = preg_replace('/[^\p{L}\s\-\']+/u', '', $name) ?? ''; // preg_replace
  $parts = preg_split('/\s+/', $name) ?: []; // preg_split
  return implode(' ', $parts);
}
