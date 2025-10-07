SISTEM DRIVE SURAT

Aplikasi berbasis web untuk pengelolaan arsip surat di lingkungan LSP Polinema. Aplikasi ini dinamai Drive Surat.
Dibangun menggunakan framework Laravel dan frontend tool Vite.js, sistem ini bertujuan untuk memodernisasi dan mempermudah proses pencatatan, pencarian, dan pengelolaan surat secara digital.

Tujuan Proyek
Menyediakan platform yang efisien dan terstruktur untuk mengelola surat masuk dan surat keluar, serta menyimpan arsip digital yang mudah diakses dan dicari.

Fitur Utama Aplikasi
Proyek Drive Surat mengimplementasikan fungsi dasar CRUD (Create, Read, Update, Delete) pada dua modul utama:

1. Kategori Surat
Modul pengelolaan klasifikasi jenis-jenis surat.

Input data kategori surat
Update kategori surat
Hapus kategori surat
Pencarian kategori surat

2. Arsip Surat
Modul inti untuk manajemen dokumen surat digital.
Upload arsip surat (insert file)
Update file arsip
Hapus arsip surat
Pencarian arsip berdasarkan kata kunci

3. Halaman About
Halaman yang menampilkan identitas mahasiswa pengembang aplikasi

Cara Menjalankan Aplikasi

1. Clone Repository
Buka terminal Anda dan clone proyek ini.

git clone https://github.com/PuhanRialdo/LSP-POLINEMA.git
cd LSP-POLINEMA

2. Install Dependencies
Install paket PHP dan JavaScript yang dibutuhkan proyek:

composer install
npm install && npm run dev

3. Konfigurasi Environment
Salin file konfigurasi dan atur key aplikasi.

cp .env.example .env
php artisan key:generate

4. Migrasi dan Seeding Database
Jalankan migrasi untuk membuat tabel, dan seeding untuk mengisi data awal.

php artisan migrate --seed

5. Jalankan Server Lokal
Aplikasi sekarang siap diakses melalui browser.

php artisan serve



Screenshot aplikasi 

1. <img width="1918" height="876" alt="image" src="https://github.com/user-attachments/assets/9fd275b4-d057-439e-85f3-5e37ed713ec4" />
menampilkan halaman dashboard

2. <img width="1918" height="875" alt="image" src="https://github.com/user-attachments/assets/43ca00a5-24ca-4bd6-85cb-e086836f8ec3" />
tampilan menu arsip

3. <img width="1918" height="897" alt="image" src="https://github.com/user-attachments/assets/046e0d69-f89e-4d6a-a93e-9e6ec3433b16" />
tampilan detail surat yang di arsipkan

4. <img width="1917" height="918" alt="image" src="https://github.com/user-attachments/assets/d533c6b4-0eeb-4b98-888c-1dc3929fa980" />
tampilan menghapus arsip surat 

5. <img width="1918" height="896" alt="image" src="https://github.com/user-attachments/assets/92852ab9-d926-479a-a154-6dcf2de5884f" />
tampilan menu kategori

6. <img width="1917" height="876" alt="image" src="https://github.com/user-attachments/assets/d932cc25-a593-42b3-8b77-839378005c55" />
 edit kategori

7. <img width="1917" height="883" alt="image" src="https://github.com/user-attachments/assets/21437b1d-1af3-435e-9d3b-72878aba7e7b" />
tambah kategori

8. <img width="1918" height="967" alt="image" src="https://github.com/user-attachments/assets/41ec04db-7507-4a3b-8e8d-66af93ae535b" />
hapus kategori

9. <img width="1918" height="871" alt="image" src="https://github.com/user-attachments/assets/a739f1ec-3c76-4dd6-a95c-4356125e68bf" />
tampilan halaman tentang 


