<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Kota Indonesia - Aesthetic Version</title>
    <!-- Google Fonts: Quicksand untuk kesan friendly & aesthetic -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons untuk ikon yang cantik -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        :root {
            --soft-pink: #fbcfe8; /* Pink muda */
            --deep-pink: #ec4899; /* Pink aksen */
            --light-green: #dcfce7; /* Hijau muda */
            --dark-green: #166534; /* Hijau tua aksen */
            --bg-gradient: linear-gradient(135deg, #fdf2f8 0%, #f0fdf4 100%);
            --white: rgba(255, 255, 255, 0.9);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            background: var(--bg-gradient);
            min-height: 100vh;
            color: #334155;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* --- Header dengan Gradient Pink-Green --- */
        header {
            background: linear-gradient(90deg, #f9a8d4 0%, #86efac 100%);
            padding: 80px 20px;
            text-align: center;
            color: white;
            clip-path: ellipse(150% 100% at 50% 0%); /* Efek melengkung di bawah */
            margin-bottom: -50px;
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            animation: fadeInDown 0.8s ease-out;
        }

        header p {
            font-size: 1.1rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        /* --- Main Container --- */
        .wrapper {
            display: grid;
            grid-template-columns: 280px 1fr;
            max-width: 1200px;
            margin: 0 auto 50px auto;
            gap: 25px;
            padding: 20px;
            width: 100%;
            animation: fadeInUp 1s ease-out;
        }

        /* --- Sidebar Aesthetic --- */
        nav {
            background: var(--white);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(244, 114, 182, 0.1);
            height: fit-content;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        nav h3 {
            color: var(--deep-pink);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--light-green);
            display: inline-block;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            margin-bottom: 12px;
        }

        nav ul li a {
            text-decoration: none;
            color: #64748b;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 15px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav ul li a:hover, nav ul li a.active {
            background: var(--soft-pink);
            color: var(--deep-pink);
            transform: translateX(10px);
        }

        /* --- Content Area --- */
        main {
            background: var(--white);
            padding: 45px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .city-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .city-title h2 {
            font-size: 2.5rem;
            color: var(--dark-green);
        }

        .badge {
            background: var(--light-green);
            color: var(--dark-green);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #475569;
            margin-bottom: 30px;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .info-card {
            background: #fdf2f8; /* Pink sangat muda */
            padding: 20px;
            border-radius: 20px;
            border: 1px dashed var(--deep-pink);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            background: var(--light-green);
            border-color: var(--dark-green);
        }

        .info-card i {
            color: var(--deep-pink);
            margin-bottom: 10px;
        }

        .info-card h4 {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .info-card p {
            font-size: 0.9rem;
            color: #64748b;
        }

        /* --- Footer --- */
        footer {
            margin-top: auto;
            text-align: center;
            padding: 40px;
            background: white;
            color: #94a3b8;
            border-top: 1px solid #e2e8f0;
        }

        /* --- Animations --- */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 900px) {
            .wrapper { grid-template-columns: 1fr; }
            header h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <header>
            <h1><i>
                Kota Di Indonesia 
            </u></i><h1>
<form method="post" action="">

        Nama: <input type="text" name="nama" required><br>
        Nomor HP: <input type="number" name="no_hp" required><br>
        TTL: <input type="date" name="ttl" required><br>

        Nilai Tugas 1: <input type="number" name="nilai_tugas_1" required><br>
        Nilai Tugas 2: <input type="number" name="nilai_tugas_2" required><br>
            
        <input type="submit" name="kirim" value="kirim">
        </form>

            <?php if (isset($_POST['kirim'])): ?>  
            <div>
                
        <strong>Nama:</strong> <?php echo $_POST['nama']; ?><br>
        <strong>Nomor HP:</strong> <?php echo $_POST['no_hp']; ?><br>
        <strong>TTL:</strong> <?php echo $_POST['ttl']; ?><br>
        <strong>Nilai Tugas 1:</strong> <?php echo (float) $_POST['nilai_tugas_1']; ?><br>
        <strong>Nilai Tugas 2:</strong> <?php echo (float) $_POST['nilai_tugas_2']; ?><br>

        <strong>Total Nilai:</strong> 
        <?php 
        echo (float)$_POST['nilai_tugas_1'] + (float)$_POST['nilai_tugas_2']; 
        ?>

</div>
<?php endif; ?>

    </div>

    <footer>
        <p>&copy; 2026 •  Informasi Kota Di Indonesia •</p>
    </footer>

    <!-- Script untuk memproses Ikon Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>

