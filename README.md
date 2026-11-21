# Project 1 — Sistem Akademik (PHP OOP)

Contoh aplikasi Sistem Akademik berbasis PHP OOP (tanpa framework) dengan tiga entitas: **Mahasiswa**, **Dosen**, dan **Matakuliah**.

## Fitur
- Tampil, input, edit, dan hapus data mahasiswa
- Tampil data dosen
- Tampil data matakuliah

## Struktur
- `app/Koneksi.php` — koneksi database (PDO)
- `app/Mahasiswa.php` — model mahasiswa
- `database.sql` — skema tabel (`tb_mhsw`, `tb_dosen`, `tb_matakuliah`)
- `index.php` — halaman utama + router `?hal=...`

## Instalasi
1. Letakkan folder ini di `htdocs` XAMPP.
2. Buat database `pbwl_samples_1`, lalu import `database.sql`.
3. Koneksi sudah diatur ke `127.0.0.1`, port **3307**, user `root`, password kosong, database `pbwl_samples_1`.
4. Buka `http://localhost/pbwl-samples-1/`.

## Catatan
Koneksi memakai ekstensi PDO MySQL. Jika port MySQL Anda berbeda, sesuaikan DSN di `app/Koneksi.php`.
