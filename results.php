<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard Resultaat</title>
    <!-- Modern Google Font -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/results.css">
</head>
<body>

    <!-- Ruimte voor navigatiebalk hierboven -->

    <main class="results-container">
        <div class="results-card">
            
            <!-- Linkerkant: Moderne Score Cirkel -->
            <div class="score-column">
                <div class="score-circle-wrapper">
                    <div class="score-circle">
                        <!-- ID toegevoegd voor JavaScript -->
                        <span class="score-num top-num" id="current-score">0</span>
                        <div class="score-divider"></div>
                        <span class="score-num bottom-num">10</span>
                    </div>
                </div>
            </div>

            <!-- Rechterkant: Tekst en Knop -->
            <div class="text-column">
                <span class="badge">Jouw Score</span>
                <h2>Prestatie Overzicht</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet commodo risus, 
                    vitae vehicula nulla eleifend non. Vestibulum viverra lectus quis enim accumsan ullamcorper. 
                    Morbi a sapien justo. Nullam sed tincidunt eros, at sollicitudin nisl.
                </p>
                <!-- ID toegevoegd voor JavaScript -->
                <button class="retry-btn" id="retry-btn">
                    <span>Opnieuw proberen</span>
                    <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="btn-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </button>
            </div>

        </div>
    </main>

    <!-- Ruimte voor footer hieronder -->

    <script src="resultscript.js"></script>
</body>
</html>
