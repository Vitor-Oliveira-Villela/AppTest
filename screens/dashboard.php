<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" />
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">DengueFoco</div>
            <div class="user">Olá, Vitor!</div>
            <nav>
                <a href="#" class="active">Mapa Geral</a>
                <a href="#">Focos</a>
                <a href="#">Casos</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="main-content">
            <!-- Header -->
            <header>
                <h1>Monitoramento Cruzeiro-SP</h1>
                <p>Acompanhe focos e casos de doenças em tempo real</p>
            </header>

            <!-- Summary Cards -->
            <div class="cards">
                <div class="card pendente">
                    <p>Focos Pendentes</p>
                    <h2>8</h2>
                </div>
                <div class="card confirmado">
                    <p>Focos Confirmados</p>
                    <h2>2</h2>
                </div>
                <div class="card casos">
                    <p>Casos Dengue</p>
                    <h2>3</h2>
                </div>
                <div class="card total">
                    <p>Total Casos</p>
                    <h2>7</h2>
                </div>
            </div>

            <!-- Map and Recent Activity -->
            <div class="content-area">
                <div class="map-container" id="map"></div>
                <div class="activity">
                    <h3>Atividade Recente</h3>
                    <ul>
                        <li class="resolvido">
                            <strong>pneus</strong> - Pneus velhos em borracharia a céu aberto.<br>
                            <span>Jardim Paraíso</span>
                        </li>
                        <li class="confirmado">
                            <strong>lixo acumulado</strong> - Terreno baldio com sacos de lixo.<br>
                            <span>Vila Romana</span>
                        </li>
                        <li class="pendente">
                            <strong>água parada</strong> - Calha entupida acumulando água.<br>
                            <span>Vila Nova</span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
    <script>
        // Inicializa mapa Leaflet
        const map = L.map('map').setView([-23.5489, -45.325], 13); // coordenadas de Cruzeiro-SP
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
    </script>
</body>
</html>
