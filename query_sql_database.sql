
-- Buat Tabel
CREATE TABLE pengguna (
  id_pengguna INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(100),
  no_telepon VARCHAR(15),
  alamat TEXT,
  tanggal_daftar DATE
);

CREATE TABLE admin (
  id_admin INT AUTO_INCREMENT PRIMARY KEY,
  nama_admin VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(100),
  no_telepon VARCHAR(15)
);

CREATE TABLE wahana (
  id_wahana INT AUTO_INCREMENT PRIMARY KEY,
  nama_wahana VARCHAR(100),
  deskripsi TEXT,
  lokasi VARCHAR(100),
  jam_operasional VARCHAR(50),
  kategori VARCHAR(50)
);

CREATE TABLE paket_tiket (
    id_paket INT AUTO_INCREMENT PRIMARY KEY,
    nama_paket VARCHAR(100) NOT NULL,
    harga_paket DECIMAL(10,2) NOT NULL
);

CREATE TABLE riwayat_tiket (
  id_tiket INT AUTO_INCREMENT PRIMARY KEY,
  id_pengguna INT,
  id_paket INT,
  tanggal_pembelian DATE,
  tanggal_kunjungan DATE,
  jam_kedatangan TIME,
  jumlah_tiket INT,
  total_harga INT,
  status_pembayaran VARCHAR(50),
  FOREIGN KEY (id_pengguna) REFERENCES pengguna(id_pengguna),
  FOREIGN KEY (id_paket) REFERENCES paket_tiket(id_paket)
);

CREATE TABLE ulasan (
  id_ulasan INT AUTO_INCREMENT PRIMARY KEY,
  id_pengguna INT,
  id_paket INT,
  rating INT,
  komentar TEXT,
  tanggal_ulasan DATE,
  FOREIGN KEY (id_pengguna) REFERENCES pengguna(id_pengguna),
  FOREIGN KEY (id_paket) REFERENCES paket_tiket(id_paket)
);

-- Isi Data
INSERT INTO pengguna (nama, email, password, no_telepon, alamat, tanggal_daftar) VALUES
('Aldi Saputra', 'aldi@gmail.com', 'password123', '081234567890', 'Bandung', '2025-05-01'),
('Sinta Dewi', 'sinta@gmail.com', 'rahasia', '081234567891', 'Jakarta', '2025-05-03'),
('Rudi Hartono', 'rudi@gmail.com', 'rudi321', '081234567892', 'Surabaya', '2025-05-04'),
('Lina Maharani', 'lina@gmail.com', 'lina456', '081234567893', 'Yogyakarta', '2025-05-05'),
('Doni Firmansyah', 'doni@gmail.com', 'doni789', '081234567894', 'Cimahi', '2025-05-06');

INSERT INTO admin (nama_admin, email, password, no_telepon) VALUES
('Admin A', 'adminA@wahana.com', 'admin123', '0800000001'),
('Admin B', 'adminB@wahana.com', 'admin456', '0800000002'),
('Admin C', 'adminC@wahana.com', 'admin789', '0800000003'),
('Admin D', 'adminD@wahana.com', 'adminabc', '0800000004'),
('Admin E', 'adminE@wahana.com', 'admindef', '0800000005');

INSERT INTO wahana (nama_wahana, deskripsi, lokasi, jam_operasional, kategori) VALUES
('Kolam Arus', 'Kolam santai dengan arus pelan', 'Zona Air', '09:00 - 17:00', 'Air'),
('Roller Coaster', 'Wahana permainan ekstrem berkecepatan tinggi', 'Zona Ekstrem', '10:00 - 18:00', 'Ekstrem'),
('Kereta Mini', 'Kereta keliling untuk anak-anak', 'Zona Anak', '08:00 - 16:00', 'Anak'),
('Rumah Hantu', 'Wahana menegangkan dengan efek spesial', 'Zona Horor', '11:00 - 19:00', 'Horor'),
('Flying Fox', 'Meluncur di atas tali sepanjang 100 meter', 'Zona Petualangan', '09:00 - 17:00', 'Petualangan');

INSERT INTO paket_tiket (nama_paket, harga_paket) VALUES
('Tiket Reguler', 75000),
('Tiket Fast Track', 150000),
('Tiket Couple (2 Orang)', 110000),
('Paket Keluarga', 270000);

INSERT INTO riwayat_tiket (id_pengguna, id_paket, tanggal_pembelian, tanggal_kunjungan, jam_kedatangan, jumlah_tiket, total_harga, status_pembayaran) VALUES
(1, 2, '2025-05-10', '2025-05-15', '10:00:00', 2, 100000, 'Sudah Bayar'),
(2, 1, '2025-05-11', '2025-05-16', '09:30:00', 3, 90000, 'Belum Bayar'),
(3, 3, '2025-05-12', '2025-05-17', '08:00:00', 1, 20000, 'Sudah Bayar'),
(4, 5, '2025-05-13', '2025-05-18', '11:00:00', 2, 70000, 'Sudah Bayar'),
(5, 4, '2025-05-14', '2025-05-19', '13:00:00', 1, 40000, 'Belum Bayar');

INSERT INTO ulasan (id_pengguna, id_paket, rating, komentar, tanggal_ulasan) VALUES
(1, 2, 5, 'Seru banget naik roller coaster!', '2025-05-15'),
(2, 1, 4, 'Kolam arusnya nyaman, anak-anak suka.', '2025-05-16'),
(3, 3, 3, 'Lumayan buat anak kecil, tapi agak membosankan.', '2025-05-17'),
(4, 5, 4, 'Flying Fox bikin deg-degan, seru!', '2025-05-18'),
(5, 4, 2, 'Rumah hantunya kurang menyeramkan.', '2025-05-19');