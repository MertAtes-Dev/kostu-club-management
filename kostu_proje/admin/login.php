<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Girişi</title>

    <!-- Bootstrap 5 CDN bağlantısı -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4 text-primary">Yönetici Girişi</h2>

                        <!-- Form, şu an sadece görsel iskelet amaçlıdır. -->
                        <!-- PHP POST işlemi ileride eklenebilir. -->
                        <form method="POST" action="#">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-posta</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="ornek@kostu.edu.tr" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi giriniz" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
