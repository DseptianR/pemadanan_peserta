# Pemadanan Peserta — Panduan Singkat

## Menjalankan (sudah terhubung ke database `pemadanan_peserta`)
1. Nyalakan MySQL (XAMPP/Laragon) dan pastikan database `pemadanan_peserta` sudah di-import dari file `.sql`.
2. Buka terminal di folder proyek, lalu jalankan:

       php artisan config:clear
       php artisan view:clear
       php artisan serve

3. Buka http://127.0.0.1:8000

Pengaturan database ada di `.env` (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
Tidak perlu `storage:link` — foto profil disimpan di `public/uploads/avatars`.

## Format Excel yang dibaca
NO | SK KEMENSOS | NIK | NAMA | ALAMAT | KEC_NAME | KEL_NAME | NO_RW | NO_RT | KETERANGAN | NAMA FASKES | Sep-26 | SEKMEN | Oct-26 | SEKMEN | hasil

- Bulan baru (Nov-26, Dec-26, ...) cukup ditambahkan di Excel; kolom SEKMEN harus tepat di kanan kolom bulannya.
- NIK yang sudah ada diperbarui, NIK baru ditambahkan.
- Menu Import Excel punya tombol "Unduh Format Excel" untuk contoh file.

## Jika upload file besar gagal
Naikkan `upload_max_filesize` dan `post_max_size` di php.ini (misalnya 64M), lalu restart server.
