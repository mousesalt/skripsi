# Security Policy

## Tentang Keamanan

Repository ini merupakan proyek penelitian dan skripsi pribadi yang mengimplementasikan sistem pengamanan dokumen berbasis web dengan mekanisme **Two-Factor Authentication (2FA)** dan **Time-Based One-Time Password (TOTP)**.

Keamanan source code dan informasi yang terdapat dalam repository ini merupakan perhatian penting.

---

## Supported Versions

Repository ini dikembangkan terutama untuk kebutuhan akademik, penelitian, dokumentasi, dan pengembangan.

Karena proyek ini bukan perangkat lunak open source yang didistribusikan secara umum, tidak terdapat komitmen untuk menyediakan security patch atau dukungan keamanan untuk seluruh versi yang pernah dipublikasikan.

---

## Melaporkan Kerentanan Keamanan

Jika Anda menemukan potensi kerentanan keamanan pada repository ini, mohon **jangan mempublikasikan detail kerentanan tersebut melalui GitHub Issues, Pull Request, atau forum publik**.

Laporkan kerentanan secara pribadi kepada pemilik repository melalui akun GitHub:

https://github.com/mousesalt

Laporan sebaiknya mencantumkan:

* Deskripsi kerentanan.
* File atau bagian sistem yang terdampak.
* Langkah untuk mereproduksi masalah.
* Dampak yang mungkin ditimbulkan.
* Bukti atau screenshot jika diperlukan.
* Saran perbaikan apabila tersedia.

---

## Informasi Sensitif

Jangan memasukkan informasi sensitif ke dalam repository, termasuk:

* Password database.
* API key.
* Secret key.
* TOTP secret.
* Token autentikasi.
* Session secret.
* Password pengguna.
* Credential server.
* Data pribadi pengguna.
* File dokumen rahasia.
* Credential layanan pihak ketiga.

Gunakan file konfigurasi lokal atau environment variable untuk informasi tersebut.

File `.env` **tidak boleh di-commit** ke repository.

Gunakan `.env.example` sebagai template konfigurasi.

---

## Disclosure

Setiap laporan keamanan akan ditinjau secara wajar sesuai dengan konteks proyek akademik ini.

Karena repository ini merupakan proyek penelitian pribadi dan bukan layanan produksi, waktu respons dan perbaikan dapat berbeda bergantung pada tingkat keparahan masalah dan status pengembangan proyek.

---

## Disclaimer

Repository ini dibuat untuk keperluan penelitian, pengembangan, dokumentasi, dan penyusunan skripsi.

Tidak ada jaminan bahwa source code telah memenuhi seluruh standar keamanan yang diperlukan untuk deployment pada lingkungan produksi.

---

© FARIDZOEL MOSSAL. All Rights Reserved.
