# UJI SPK - METODE WP

***Weighted Product (WP)*** adalah salah satu Sistem Pendukung Keputusan (SPK) menggunakan **Multiple Attribute Decision Making (MADM)**,
dimana ada alternatif keputusan yang akan diambil dan ada kriteria atau atribut
keputusan yang digunakan untuk menentukan yang terbaik.

## Penerapan Metode WP

Metode WP yang diterapkan di sini adalah **"Alternatif Pemilihan Laptop untuk Kebutuhan Programming"**.

Berikut alternatif dan kriteria yang digunakan.

---
| | Alternatif |
| ---- | --- |
| A1 | ASUS ZenBook UX310UQ |
| A2 | HP Pavilion 15-BC403TX |
| A3 | Acer Predator Nitro 5 AN515-52 |
| A4 | Dell Inspiron 3576 |
| A5 | HP Envy 13 AH0051WM |

---
| | Kriteria | Bobot |
| --- | --- | --- |
| C1 | Harga | 5
| C2 | Kecepatan Processor (GHz) | 20 |
| C3 | Processor Cache (MB) | 10 |
| C4 | RAM (GB) | 10 |
| C5 | Kecepatan RAM (MHz) | 8 |
| C6 | Storage (GB) | 15 |
| C7 | Daya Tahan Baterai (Hrs) | 10 |
| C8 | Ukuran Layar (Inch) | 10 |
| C9 | VRAM (GB) | 7 |
| C10 | Berat (Kg) | 5 |
---
> Atribut **Harga** dan **Berat (Kg)** merupakan atribut biaya (*cost*), selebihnya atribut keuntungan (*benefit*).

## Screenshot Hasil
![WP - Hasil](WP%20-%20Hasil.png)

## Clone Repository
Sebelum di-*clone*, pastikan `git` telah terinstal pada perangkat.

```bash
$ git clone https://github.com/muh-fajri/methodwp.git
```
## Buat Database
Untuk menjalankan SPK ini secara lokal, saya asumsikan *Web Server* telah terinstal.
1. Buat database dengan nama `wp`.
2. Import file `wp.sql.zip` yang ada di dalam folder repository `methodwp` yang di-*clone* tadi.
3. Salin folder `methodwp` pada direktori yang menjalankan *Web Server* lokal.
4. Jalankan localhost yang mengarah pada program `methodwp` ini (`http://localhost/methodwp`).

Jika berhasil, tampilan seperti gambar di atas akan kalian jumpai.

> **Catatan :**
> - Program ini bersifat statis, *artinya* hanya dapat digunakan untuk menguji metode WP seperti yang disebutkan di sini (Pemilihan Laptop Programming).
> - Silahkan di-*explore* dan kembangkan lagi agar sesuai dengan kebutuhan.

Semoga bermanfaat.