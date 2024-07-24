# Sistem Pembayaran Listrik Pasca Bayar

Sistem ini adalah aplikasi web untuk mengelola pembayaran listrik pasca bayar. Dibangun menggunakan bahasa pemrograman PHP dan MySQL sebagai basis data. Sistem ini memungkinkan pengguna untuk melihat tagihan listrik, melakukan pembayaran, dan melihat riwayat pembayaran.
![image](https://github.com/user-attachments/assets/5ec503da-0e56-419d-a9d1-0d9f585f1705)

## Fitur

- **Autentikasi Pengguna**: Registrasi, login, dan logout.
- **Lihat Tagihan**: Pengguna dapat melihat tagihan listrik bulanan mereka.
- **Pembayaran**: Melakukan pembayaran tagihan listrik.
- **Riwayat Pembayaran**: Melihat riwayat pembayaran yang telah dilakukan.
- **Admin Panel**: Mengelola pengguna dan tagihan (khusus untuk admin).

## Prasyarat

- **PHP** >= 7.4
- **MySQL** >= 5.7
- **Web Server** (seperti Apache atau Nginx)

## Instalasi

1. **Clone Repository**:
   ```bash
   git clone https://github.com/muhammadridwan47/listrik-pasca-bayar.git
   cd listrik-pasca-bayar

2. **Konfigurasi Basis Data:**:
  - Buat database baru di MySQL dengan nama pln.
  - Import file `pln.sql` ke dalam database pln.

## Penggunaan
1. **Registrasi dan Login:**:
  - Buka http://localhost/listrik-pasca-bayar di browser.
  - Login dengan akun:
    - Admin: username `admin` password `admin`
    - Petugas: username `petugas` password `petugas`
    - Pelanggan: username `PLG100000001` password `PLG100000001`

2. **Lihat Tagihan:**:
   - Setelah login, pengguna dapat melihat tagihan listrik bulanan mereka di dashboard.

3. **Melakukan Pembayaran:**:
   - Pilih tagihan yang ingin dibayar dan ikuti instruksi untuk menyelesaikan pembayaran. 

3. **Riwayat Pembayaran:**:
   - Pengguna dapat melihat riwayat pembayaran mereka di halaman riwayat pembayaran.

4. **Admin Panel:**:
   - Admin dapat mengakses panel admin untuk mengelola pengguna dan tagihan.

## Struktur Proyek
 ```bash
├── app
│   ├── connect.php
│   ├── functions.php
├── assets
│    └── style.css
│    └── images
│       └── tagihan
├── sources
│   └── admin
│   └── invoice
│   └── maintemplate
│   └── pelanggan
│   └── petugas
│   └── proccess
├── .htaccess
├── index.php
├── pln.sql
├── .env.example
└── README.md


