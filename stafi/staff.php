<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../php/includes/functions.php';
require_once __DIR__ . '/../php/includes/db.php';
require_once __DIR__ . '/../php/classes/User.php';

$pdo = null;
$dbError = '';

try {
    $pdo = db();
} catch (Throwable $t) {
    $dbError = $t->getMessage();
}

$staff = [
    ['name' => 'Albina Zekaj',  'file' => 'Albina-Zekaj.php',  'img' => '../images/Albina-Zekaj.jpg'],
    ['name' => 'Altina Pllana', 'file' => 'Altina-Pllana.php', 'img' => '../images/Altina-Pllana.jpg'],
    ['name' => 'Ardit Nimanaj', 'file' => 'Ardit-Nimanaj.php', 'img' => '../images/Ardit-Nimanaj.jpg'],
    ['name' => 'Arita Azizi',   'file' => 'Arita-Azizi.php',   'img' => '../images/Arita-Azizi.jpg'],
    ['name' => 'Dea Arifi',     'file' => 'Dea-Arifi.php',     'img' => '../images/Dea-Arifi.jpg'],
];

usort($staff, fn($a, $b) => strcmp($a['name'], $b['name']));

/**
 * Demo DB DML: insert via query param (prepared statement)
 * WARNING: në prodhim, mos e le pa auth/CSRF. E lë vetëm si demo.
 */
$flash = '';
if ($pdo && isset($_GET['seed'])) {
    try {
        $stmt = $pdo->prepare("INSERT INTO items (title, status) VALUES (:t, 0)");
        $stmt->execute(['t' => 'Seed item ' . date('H:i:s')]);
        $flash = 'Seed inserted into DB (items table).';
    } catch (Throwable $t) {
        $flash = 'Seed failed: ' . $t->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>Stafi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="staff.css" />
    <script src="../common.js" defer></script>
    

    <script>
        function filterStaffCards() {
            const filter = document.getElementById('myInput').value.trim().toUpperCase();
            const cards = document.getElementsByClassName("card");

            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const nameLink = card.querySelector('.back a');
                const nameText = nameLink ? nameLink.textContent.toUpperCase() : '';

                card.style.display = nameText.indexOf(filter) > -1 ? "" : "none";
            }
        }
    </script>
</head>

<body style="background-color: rgb(32, 30, 30);">

    <!-- Debug/seed (e le te fshehur si te ti) -->
    <div style="display:none; margin:10px 150px; color:white; font-family:Arial;">
        <?php if ($flash): ?>
            <p style="color:lightgreen;"><?php echo e($flash); ?></p>
        <?php endif; ?>

        <?php if ($dbError): ?>
            <p style="color:#ff8080;">DB error: <?php echo e($dbError); ?></p>
        <?php endif; ?>

        <p style="margin:0;">
            <a style="color:orange;" href="staff.php?seed=1">Seed DB (DML INSERT)</a>
        </p>
    </div>

    <!-- NAV -->
    <nav>
        <ul class="nav-links">
            <li><a href="../index.php">Kryefaqja</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-btn">Lajme</a>
                <div class="dropdown-menu">
                    <a href="../lajmet/sport.php">Sport</a>
                    <a href="../lajmet/teknologji.php">Tech</a>
                    <a href="../lajmet/fun.php">Fun</a>
                </div>
            </li>

            <li><a href="staff.php">Stafi</a></li>
            <li><a href="../kontakt/kontakt.php">Kontakt</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-btn"><i class="fa fa-user-circle"></i></a>
                <div class="dropdown-menu">
                    <a href="#" onclick="openKycu(); return false;">Kyçu</a>
                    <a href="#" onclick="openRegjistrohu(); return false;">Regjistrohu</a>
                </div>
            </li>
        </ul>

        <ul class="social-icons">
            <li><a href="https://www.instagram.com" class="c1" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.github.com" class="c2" target="_blank" rel="noopener"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.twitter.com" class="c3" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="c4" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
        </ul>
    </nav>

    <main>
        <p style="color:#fff; font-family:Raleway, sans-serif; font-size:28px; margin:20px 0 10px; text-align:center;">
            NEWS24 Profilet
        </p>

        <div style="display:flex; justify-content:center; margin-bottom:20px;">
            <input
                type="text"
                id="myInput"
                onkeyup="filterStaffCards()"
                placeholder="Shkruaj emrin..."
                style="width:320px; padding:10px 12px; border-radius:8px; border:1px solid #444;"
            />
        </div>

        <!-- Kartat (gjenerohen nga PHP) -->
        <div class="row">
            <?php foreach ($staff as $person): ?>
                <div class="column">
                    <div class="card-container">
                        <div class="card">
                            <div class="side">
                                <img
                                    src="<?php echo e($person['img']); ?>"
                                    alt="<?php echo e($person['name']); ?>"
                                    height="200"
                                    width="300"
                                />
                            </div>
                            <div class="side back">
                                <a href="<?php echo e($person['file']); ?>">
                                    <?php echo e($person['name']); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- JS i jashtem (nese e perdor) -->
    <script src="../javascript.js"></script>
</body>
</html>
