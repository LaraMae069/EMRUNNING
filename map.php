<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Klang Royal City Marathon - Map</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Futuristic Header & Navigation Section -->
    <header class="main-header">
        <div class="logo">RUNNER_SYS // v2.0</div>
        <nav class="nav-menu">
            <a href="index.php" class="nav-link">Home</a>
            <a href="map.php" class="nav-link">Map</a>
            <a href="login.php" class="nav-out">Sign out</a>
        </nav>
    </header>

    <h2>COURSE_MAP // 42.195KM</h2>

    <!-- Main Map Container Grid -->
    <div class="map-wrapper">

        <!-- Left Panel: Stats & Cut-off Telemetry -->
        <div class="telemetry-panel">
            <div class="panel-header">RACE_SPECIFICATIONS</div>

            <div class="stat-group highlight">
                <span class="stat-label">DISTANCE</span>
                <span class="stat-value">42.195 KM</span>
            </div>

            <div class="stat-group">
                <span class="stat-label">FLAG OFF TIME</span>
                <span class="stat-value">01:30 AM</span>
            </div>

            <hr class="panel-divider">

            <div class="cutoff-group">
                <div class="cutoff-title">CHECKPOINT 1</div>
                <div class="cutoff-info">CUT OFF: <span>3:00 HRS</span></div>
                <div class="cutoff-sub">GATE CLOSE: 4:30 AM</div>
            </div>

            <div class="cutoff-group">
                <div class="cutoff-title">CHECKPOINT 2</div>
                <div class="cutoff-info">CUT OFF: <span>5:00 HRS</span></div>
                <div class="cutoff-sub">GATE CLOSE: 6:30 AM</div>
            </div>

            <div class="cutoff-group alert">
                <div class="cutoff-title">FINISH POINT</div>
                <div class="cutoff-info">CUT OFF: <span>7:15 HRS</span></div>
                <div class="cutoff-sub">GATE CLOSE: 8:45 AM</div>
            </div>

            <div class="legend-box">
                <div class="legend-header">COURSE_LEGEND</div>
                <ul class="legend-list">
                    <li><span class="legend-icon start"></span> START / FINISH</li>
                    <li><span class="legend-icon water"></span> WATER / ISOTONIC</li>
                    <li><span class="legend-icon medic"></span> MEDIC STATION</li>
                    <li><span class="legend-icon cp"></span> CHECKPOINT</li>
                    <li><span class="legend-icon gel"></span> POWER GEL / BANANA</li>
                </ul>
            </div>
        </div>

        <!-- Right Panel: Interactive Route Display -->
        <div class="map-viewport">
            <div class="viewport-tag">GPS_FEED // LIVE_TRACKING</div>

            <!-- Replace the src with your uploaded image file name if stored locally -->
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2Al1qoHuE3f58KQW8p74tEqvVFmpvQoubbKx32s-edaXkgbvpySuN2FM&s=10" alt="Klang Royal City Marathon Route Map" class="map-image">

            <!-- HUD Scanner Overlay -->
            <div class="hud-overlay">
                <div class="scan-line"></div>
                <div class="corner-bracket top-left"></div>
                <div class="corner-bracket top-right"></div>
                <div class="corner-bracket bottom-left"></div>
                <div class="corner-bracket bottom-right"></div>
            </div>
        </div>

    </div>

</body>

</html>