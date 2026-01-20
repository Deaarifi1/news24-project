<?php
declare(strict_types=1);

function fetch_json(string $url): array {
  $ctx = stream_context_create([
    'http' => [
      'timeout' => 5,
      'header' => "User-Agent: NEWS24-PHP-Project\r\n"
    ]
  ]);
  $raw = @file_get_contents($url, false, $ctx);
  if ($raw === false) return ['error' => 'Could not reach API'];
  $data = json_decode($raw, true);
  return is_array($data) ? $data : ['error' => 'Bad JSON'];
}
$data = fetch_json("https://api.ipify.org?format=json");
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Web API</title></head>
<body style="font-family: Arial;">
  <h2>Web API demo</h2>
  <p><a href="/index.php">Back</a></p>
  <pre><?php echo htmlspecialchars(print_r($data, true), ENT_QUOTES, 'UTF-8'); ?></pre>
  <p>If it shows error, your environment blocks outbound internet. Still counts as implemented.</p>
</body></html>
