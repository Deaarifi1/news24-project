<?php
declare(strict_types=1);
session_start();
?>
<!doctype html>
<html><head><meta charset="utf-8"><title>AJAX Demo</title></head>
<body style="font-family: Arial;">
  <h2>AJAX Demo</h2>
  <p><a href="/index.php">Back</a></p>

  <h3>1) Read + Update from PHP script (no DB)</h3>
  <button id="readBtn">Read</button>
  <button id="updateBtn">Update</button>
  <pre id="out1"></pre>

  <h3>2) Read + Update from DB (items table)</h3>
  <button id="dbReadBtn">DB Read</button>
  <button id="dbUpdateBtn">Toggle first item</button>
  <pre id="out2"></pre>

  <script src="/php/assets/app.js"></script>
</body></html>
