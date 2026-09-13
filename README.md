# Sistem Pengamanan Dokumen Menggunakan TOTP pada Two-Factor Authentication

Repository ini berisi **source code implementasi sistem pengamanan dokumen berbasis web** yang dikembangkan sebagai bagian dari penelitian skripsi.

Sistem menerapkan **Time-Based One-Time Password (TOTP)** sebagai mekanisme autentikasi tambahan pada **Two-Factor Authentication (2FA)** untuk meningkatkan keamanan akses terhadap dokumen.

## Publikasi Ilmiah

Penelitian yang berkaitan dengan sistem ini telah dipublikasikan dalam:

> **Perancangan Sistem Pengamanan Dokumen Menggunakan Algoritma Time-Based One Time Password (TOTP) Pada Two-Factor Authentication (2FA) Berbasis Web**

**Penulis:**

* Faridzoel Mossal
* Sayed Achmady
* Zikrul Khalid

**Jurnal:** Jurnal TEKSAGRO
**Volume:** 3
**Nomor:** 2
**Tahun:** 2022
**Halaman:** 31–36
**e-ISSN:** 2723-6528
**Tanggal Submisi:** 15 Agustus 2022
**Tanggal Penerimaan:** 29 Agustus 2022

**Artikel:**

[Jurnal TEKSAGRO — Artikel Penelitian](https://www.journal.lp2stm.or.id/index.php/TEKSAGRO/article/view/39?utm_source=chatgpt.com)

**PDF Artikel:**

[Download PDF Artikel](https://www.journal.lp2stm.or.id/index.php/TEKSAGRO/article/download/39/44?utm_source=chatgpt.com)

---

## Abstrak Singkat

Penelitian ini membahas perancangan sistem pengamanan dokumen dengan menerapkan mekanisme keamanan berlapis menggunakan kombinasi **TOTP dan 2FA** pada proses autentikasi berbasis web.

Sistem dirancang untuk meningkatkan keamanan akses terhadap dokumen elektronik melalui autentikasi tambahan menggunakan kode yang dihasilkan berdasarkan waktu.

Implementasi ditujukan untuk mendukung pengamanan dokumen, khususnya pada lingkungan yang membutuhkan penyimpanan dokumen yang bersifat penting atau rahasia.

---

## Fitur Sistem

* Registrasi pengguna
* Login pengguna
* Logout
* Two-Factor Authentication (2FA)
* Time-Based One-Time Password (TOTP)
* Integrasi Google Authenticator
* Konfirmasi perangkat
* Manajemen sesi pengguna
* Pengamanan akses dokumen
* File manager
* Pencatatan aktivitas autentikasi
* Database MySQL/MariaDB

---

## Teknologi

| Teknologi            | Fungsi                           |
| -------------------- | -------------------------------- |
| PHP                  | Backend aplikasi                 |
| MySQL / MariaDB      | Database                         |
| HTML                 | Struktur halaman                 |
| CSS                  | Antarmuka                        |
| JavaScript           | Interaksi pengguna               |
| TOTP                 | One-Time Password berbasis waktu |
| Google Authenticator | Generator kode TOTP              |
| Apache               | Web server                       |

---

## Konsep Autentikasi

Sistem menggunakan pendekatan autentikasi berlapis.

```text
Pengguna
   │
   ▼
Login
   │
   ▼
Verifikasi Kredensial
   │
   ▼
Verifikasi 2FA / TOTP
   │
   ▼
Konfirmasi Berhasil
   │
   ▼
Akses Sistem
   │
   ▼
Akses Dokumen
```

Kode TOTP bersifat **time-based**, sehingga kode autentikasi berubah secara berkala dan tidak hanya bergantung pada password pengguna.

---

## Struktur Repository

```text
skripsi/
│
├── assets/
├── filemgr/
├── googleLib/
│
├── auth.php
├── auth_log.php
├── connection.php
├── device_confirmations.php
├── device_confirmations_login.php
├── index.php
├── login.php
├── logout.php
├── register.php
│
├── totp.sql
├── README.md
├── LICENSE
└── .gitignore
```

---

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/mousesalt/skripsi.git
```

Kemudian:

```bash
cd skripsi
```

### 2. Jalankan Web Server

Repository dapat digunakan pada lingkungan pengembangan seperti:

* XAMPP
* Laragon
* Apache + PHP
* MariaDB/MySQL

Untuk XAMPP, letakkan repository pada:

```text
C:\xampp\htdocs\skripsi
```

### 3. Buat Database

Buat database:

```text
totp
```

Kemudian import:

```text
totp.sql
```

### 4. Konfigurasi Database

Sesuaikan konfigurasi database pada:

```text
connection.php
```

### 5. Jalankan

Buka:

```text
http://localhost/skripsi/
```

---

## Penggunaan Google Authenticator

Sistem menggunakan mekanisme TOTP sehingga pengguna membutuhkan aplikasi authenticator yang kompatibel, seperti Google Authenticator.

Alur umumnya:

```text
Registrasi
   ↓
Pembuatan Secret TOTP
   ↓
Hubungkan Authenticator
   ↓
Login
   ↓
Masukkan Kode TOTP
   ↓
Verifikasi
   ↓
Akses Sistem
```

---

## Tujuan Penelitian

Sistem ini dikembangkan untuk:

1. Meningkatkan keamanan autentikasi pengguna.
2. Menerapkan autentikasi dua faktor pada aplikasi berbasis web.
3. Mengimplementasikan algoritma Time-Based One-Time Password.
4. Memberikan lapisan keamanan tambahan pada akses dokumen.
5. Mendukung pengamanan dokumen elektronik.

---

## Status Proyek

**Academic Research / Thesis Project**

Repository ini merupakan bagian dari dokumentasi pengembangan sistem yang berkaitan dengan penelitian dan skripsi.

Kode yang terdapat di repository dapat mengalami perubahan sesuai dengan kebutuhan penelitian, pengujian, dokumentasi, dan pengembangan sistem.

---

## Hak Cipta dan Kepemilikan

Copyright © 2026 **Mousesalt**.

Repository ini merupakan karya pribadi dan **tidak dimaksudkan sebagai proyek open source**.

Hak atas source code dan materi yang dibuat oleh pemilik repository tetap berada pada pemiliknya.

Penggunaan, penyalinan, modifikasi, distribusi, publikasi ulang, atau penggunaan sebagian maupun seluruh source code untuk proyek lain **tidak diperbolehkan tanpa izin tertulis dari pemilik**.

Untuk ketentuan lengkap, lihat file [`LICENSE`](LICENSE).

> **Catatan:** Komponen pihak ketiga yang terdapat dalam repository tetap tunduk pada lisensi masing-masing.

---

## Publikasi dan Karya Terkait

Repository ini memiliki hubungan dengan penelitian yang telah dipublikasikan pada Jurnal TEKSAGRO:

**Faridzoel Mossal, Sayed Achmady, Zikrul Khalid (2022).**
*Perancangan Sistem Pengamanan Dokumen Menggunakan Algoritma Time-Based One Time Password (TOTP) Pada Two-Factor Authentication (2FA) Berbasis Web.*

Jurnal TEKSAGRO, Vol. 3 No. 2, pp. 31–36.

---

## Lisensi

**All Rights Reserved — FARIDZOEL MOSSAL **

Source code dalam repository ini tidak diberikan sebagai perangkat lunak open source.

Silakan lihat [`LICENSE`](LICENSE) untuk ketentuan penggunaan.

---

© 2022 FARIDZOEL MOSSAL — All Rights Reserved.
