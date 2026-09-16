<?php 
$namaAplikasi = 'Sistem Inventaris Laboratorium'; 
$waktu = date('d-m-Y H:i:s'); 
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Inventaris Laboratorium - Aplikasi praktikum Rekayasa Perangkat Lunak.">
    <title><?= htmlspecialchars($namaAplikasi) ?></title>

        <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="scanline"></div>

    <div class="shell">
        <nav>
            <div class="brand">
                <div class="brand-mark">⌬</div>
                <span>LAB // SYSTEM</span>
            </div>

            <div class="status">
                <span class="status-dot"></span>
                SYSTEM ONLINE
            </div>
        </nav>

        <main>
            <section class="hero">
                <div class="corner-code">
                    SYS_ID: RPL-LAB<br>
                    ACCESS: PUBLIC<br>
                    NODE: <?= date('His') ?>
                </div>

                <div class="eyebrow">Laboratory Inventory Network</div>

                <h1>
                    <?= htmlspecialchars($namaAplikasi) ?>
                </h1>

                <p class="description">
                    Aplikasi praktikum Rekayasa Perangkat Lunak untuk
                    mengelola informasi inventaris laboratorium dengan
                    tampilan antarmuka bergaya cyber.
                </p>

                <div class="terminal">
                    <div class="terminal-line">
                        <b>root@rpl-lab:~$</b>
                        <strong>system.status</strong>
                    </div>
                    <div class="terminal-line">
                        <span>[OK]</span>
                        <span>Server time:</span>
                        <strong><?= htmlspecialchars($waktu) ?></strong>
                    </div>
                    <div class="terminal-line">
                        <span>[OK]</span>
                        <span>Database interface ready...</span>
                    </div>
                </div>

                <div class="actions">
                    <a href="#" class="btn">ACCESS SYSTEM →</a>
                    <a href="#info" class="btn secondary">SYSTEM INFO</a>
                </div>

                <div class="stats" id="info">
                    <div class="stat">
                        <span class="stat-number">01</span>
                        <span class="stat-label">Inventory Core</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">RPL</span>
                        <span class="stat-label">Practical Module</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">LIVE</span>
                        <span class="stat-label">Server Status</span>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <?= htmlspecialchars($namaAplikasi) ?> // REKAYASA PERANGKAT LUNAK // <?= date('Y') ?>
        </footer>
    </div>
</body>
</html>
