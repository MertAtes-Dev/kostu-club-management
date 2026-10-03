-- Veritabanı adı: kostu_db
-- Bu SQL dosyası, proje için gerekli temel tabloları oluşturur.


CREATE DATABASE IF NOT EXISTS kostu_db;
USE kostu_db;

-- roles tablosu: Kullanıcı rollerini tutar.
-- Örnek roller: 1 = Süper Admin, 2 = Kulüp Admini, 3 = Öğrenci
CREATE TABLE IF NOT EXISTS roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB;

-- users tablosu: Sisteme kayıtlı kullanıcı bilgilerini tutar.
-- role_id alanı, kullanıcı rolünü roles tablosuna bağlar.
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_users_roles FOREIGN KEY (role_id) REFERENCES roles(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- clubs tablosu: Kulüplerin temel bilgilerini tutar.
CREATE TABLE IF NOT EXISTS clubs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- events tablosu: Etkinliklerin bilgilerini tutar.
-- club_id alanı, etkinliğin ait olduğu kulübü clubs tablosuna bağlar.
CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    location VARCHAR(150) DEFAULT NULL,
    club_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_events_clubs FOREIGN KEY (club_id) REFERENCES clubs(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- Aşağıdaki alanlar başlangıç için örnek veridir.
-- Bu veriler, uygulamanın ilk çalıştırılmasında test amaçlı eklenir.
INSERT INTO roles (name, description) VALUES
('Süper Admin', 'Tüm sistemi yöneten ana yönetici'),
('Kulüp Admini', 'Kendi kulübüne ait işlemleri yönetir'),
('Öğrenci', 'Kulüp etkinliklerine katılan kullanıcı');
