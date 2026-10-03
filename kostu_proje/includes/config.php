<?php
// Bu dosya, veritabanı bağlantısını tek merkezden yönetmek için hazırlanmıştır.
// Proje büyüdükçe bağlantı bilgilerini tek yerden değiştirmek kolay olur.

$host = 'localhost';
$dbName = 'kostu_db';
$dbUser = 'root';
$dbPassword = '';

try {
    // PDO nesnesi oluşturuluyor.
    // MySQL sunucusuna bağlanmak için gerekli bilgiler burada belirtiliyor.
    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPassword
    );

    // Hataları exception olarak yakalamak için PDO hata modunu ayarlıyoruz.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Varsayılan veri çekme modu associative array olacak şekilde belirleniyor.
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Eğer bağlantı başarılı olursa, burada bir şey yazdırmaya gerek yoktur.
    // Çünkü bu dosya sadece veritabanı bağlantısı için kullanılacaktır.
} catch (PDOException $e) {
    // Bağlantı sırasında hata oluşursa, kullanıcıya anlaşılır bir mesaj gösterilir.
    // Bu örnekte ekrana doğrudan hata metni yazdırıyoruz.
    die("Veritabanı bağlantısı kurulamadı. Hata: " . $e->getMessage());
}
