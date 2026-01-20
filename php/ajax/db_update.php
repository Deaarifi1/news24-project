<?php
declare(strict_types=1);
header('Content-Type: application/json');
require_once __DIR__ . '/../includes/db.php';

try {
  $pdo = db();
  $stmt = $pdo->prepare("UPDATE items SET status = 1 - status WHERE id = :id");
  $stmt->execute(['id' => 1]);

  $rows = $pdo->query("SELECT id,title,status,updated_at FROM items ORDER BY id ASC")->fetchAll();
  echo json_encode(['ok'=>true,'items'=>$rows]);
} catch (Throwable $t) {
  http_response_code(500);
  echo json_encode(['ok'=>false,'error'=>$t->getMessage()]);
}
