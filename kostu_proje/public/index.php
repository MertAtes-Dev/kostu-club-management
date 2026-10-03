<?php
// Bu dosya, uygulamanın ana giriş sayfasıdır.
// Veritabanı bağlantısı dosyasını sayfaya dahil ediyoruz.
require_once __DIR__ . '/../includes/config.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOSTÜ Kulüp Yönetim Sistemi</title>

    <!-- Bootstrap 5 CDN bağlantısı -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card shadow-sm border-0 p-5">
                    <h1 class="display-6 fw-bold text-primary">
                        KOSTÜ Kulüp Yönetim Sistemine Hoş Geldiniz
                    </h1>
                    <p class="lead mt-3 text-secondary">
                        Öğrenci kulüpleri ve etkinlik yönetimi için hazırlanan temel giriş sayfasıdır.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
