# Laporan Kontribusi Tim

> **Tanggal:** 27 Juni 2026
> **Repository:** `https://github.com/fathur-md/asn-laravel`

## Catatan

Dokumen ini dibuat dengan bantuan **OpenCode (Big Pickle Agent)** berdasarkan analisis repository menggunakan:

- Riwayat Git (`git log`, `git shortlog`)
- Git Blame
- Struktur repository
- Analisis source code
- Pesan commit

AI hanya membantu **merangkum dan menyusun dokumentasi**. Seluruh informasi berasal dari repository dan dilengkapi dengan klarifikasi langsung dari tim pengembang.

> **Catatan:** Riwayat Git tidak selalu menggambarkan seluruh kontribusi anggota karena adanya pair programming, penggunaan laptop bersama, diskusi desain, debugging, dan aktivitas lain yang tidak tercatat dalam commit.

---

## Gambaran Proyek

**DonasiKita** — platform crowdfunding donasi berbasis web yang memungkinkan individu/organisasi membuat campaign penggalangan dana.

**Teknologi:** PHP 8.4, Laravel 13, PostgreSQL, Tailwind CSS 4, Alpine.js 3.15, Vite 8, Pest 4

**Statistik:**

- Durasi: 20–26 Juni 2026 (7 hari)
- Total commit: 85
- Jumlah anggota: 5

---

## Ringkasan Kontribusi

| Anggota                         | Kontribusi Utama                                            |
| ------------------------------- | ----------------------------------------------------------- |
| **Muhammad Fathurrahman**       | Backend, frontend, refactoring, integrasi fitur, bug fixing |
| **Ferdiyansyah Pratama Putra**  | Ide proyek, desain fitur, implementasi awal aplikasi        |
| **Maria Violeta V. Wungubelen** | Penyempurnaan Campaign, UI, validasi                        |
| **Julius Flaviano Aleo Keu**    | Pengembangan bersama menggunakan laptop Ferdi               |
| **Enrico Reyner Lumenta**       | Pengembangan bersama menggunakan laptop Ferdi               |

### Detail per Anggota

**Muhammad Fathurrahman** (45 commit, 53%)

- Penyiapan proyek, migrasi database, 4 model (kepenulisan 100%)
- CRUD Campaign, sistem donasi & komentar, dashboard user & admin
- Halaman beranda, navbar, layout, halaman about
- Factory, test, konfigurasi deployment, dokumentasi
- Refactoring besar-besaran pada kode yang sudah ada

**Ferdiyansyah Pratama Putra** (18 commit, 21%)

- Sistem autentikasi penuh (AuthController — 92% blame)
- CampaignController awal, view campaign awal
- DashboardController versi pertama
- `config/brand.php` (100% blame), konfigurasi navigasi
- Migrasi kolom user, modifikasi tabel

**Maria Violeta V. Wungubelen** (20 commit, 24%)

- 7 commit penyempurnaan CampaignController (validasi, redirect, store)
- 5 iterasi view indeks campaign (~31% blame)
- Restrukturisasi view detail campaign
- Penyesuaian form buat campaign

**Julius Flaviano Aleo Keu** (1 commit, 1%)

- 1 commit minor (update anggota tim di route)

**Enrico Reyner Lumenta** (0 commit)

- Tidak ada commit teratribusi

### Fitur Kolaboratif

| Fitur               | Penulis Utama              | Kolaborator                         |
| ------------------- | -------------------------- | ----------------------------------- |
| CampaignController  | Fathurrahman (versi final) | Ferdi (awal), Maria (penyempurnaan) |
| View Campaign       | Fathurrahman (optimal)     | Ferdi (draf awal), Maria (UI)       |
| DashboardController | Fathurrahman (final)       | Ferdi (kerangka)                    |
| AboutController     | Fathurrahman (desain)      | Ferdi (manajemen anggota)           |
| Migrasi DB          | Fathurrahman (dasar)       | Ferdi (modifikasi)                  |
| View Auth           | Ferdi (awal)               | Fathurrahman (styling)              |

---

## Klarifikasi Tim

Tim memberikan informasi tambahan di luar riwayat Git:

### Ferdiyansyah

- **Mengusulkan ide proyek** — menciptakan konsep DonasiKita
- **Merancang fitur utama** — CRUD campaign, donasi, autentikasi, dashboard
- **Implementasi awal** — versi kerja pertama controller, view, konfigurasi
- **Fondasi awal** — baseline struktural untuk pengembangan selanjutnya

### Muhammad Fathurrahman

- **Peningkatan backend** — logika data, validasi, efisiensi query
- **Penyempurnaan arsitektur** — Route Model Binding, eager loading, accessor
- **Frontend & UI** — template Blade, Tailwind, desain responsif
- **Bug fixing & stabilitas** — error runtime, edge cases, transisi status
- **Refactoring** — menulis ulang implementasi awal untuk maintainability
- **Integrasi** — menghubungkan semua fitur menjadi satu kesatuan

### Julius Flaviano Aleo Keu & Enrico Reyner Lumenta

Keduanya berpartisipasi dalam pengembangan, tetapi menggunakan **laptop dan identitas Git yang sama** dengan Ferdiyansyah. Akibatnya, kontribusi mereka tidak seluruhnya tercermin dalam riwayat Git. Tim mengonfirmasi bahwa:

- **Aliokey** memiliki partisipasi yang diremehkan Git
- **Rey** tidak memiliki commit atas namanya, tetapi tim menyatakan ia turut berkontribusi

### Maria Violeta V. Wungubelen

Kontribusi sesuai dengan riwayat Git — terutama penyempurnaan fitur Campaign dan UI.

---

## Keterbatasan Analisis

Laporan ini menggabungkan bukti repository, riwayat Git, Git Blame, serta klarifikasi langsung dari tim.

Karena penggunaan laptop bersama, pair programming, diskusi desain, debugging, dan aktivitas kolaboratif lainnya, riwayat Git **tidak dapat dijadikan satu-satunya indikator kontribusi individu**.

---

## Dokumen Pendukung

Analisis lengkap — statistik commit, Git Blame, daftar file, timeline, metodologi, dan bukti teknis — tersedia di **`LAPORAN_KONTRIBUSI_TIM_DETAILED.md`**.
