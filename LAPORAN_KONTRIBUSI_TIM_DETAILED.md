# Laporan Kontribusi Tim — Detail Analisis

> **Dokumen pendukung** dari `LAPORAN_KONTRIBUSI_TIM.md`
> Berisi analisis teknis lengkap: statistik commit, Git Blame, normalisasi identitas, metodologi, dan disclaimer.
> **Tanggal:** 27 Juni 2026

---

## Daftar Isi

1. [Catatan Penting](#catatan-penting)
2. [Normalisasi Identitas](#normalisasi-identitas)
3. [Ringkasan Kontribusi — Bukti Git](#ringkasan-kontribusi--bukti-git)
4. [Ringkasan Kontribusi — Konfirmasi Tim](#ringkasan-kontribusi--konfirmasi-tim)
5. [Analisis Individu Lengkap](#analisis-individu-lengkap)
   - [Muhammad Fathurrahman](#muhammad-fathurrahman)
   - [Ferdiyansyah Pratama Putra](#ferdiyansyah-pratama-putra)
   - [Maria Violeta V. Wungubelen](#maria-violeta-v-wungubelen)
   - [Julius Flaviano Aleo Keu](#julius-flaviano-aleo-keu)
   - [Enrico Reyner Lumenta](#enrico-reyner-lumenta)
6. [Fitur Kolaboratif](#fitur-kolaboratif)
7. [Ketidakpastian](#ketidakpastian)
8. [Keterbatasan Analisis Berbasis Git](#keterbatasan-analisis-berbasis-git)
9. [Metodologi](#metodologi)
10. [Disclaimer Akademis](#disclaimer-akademis)

---

## Catatan Penting

Dokumen ini diproduksi dengan bantuan **OpenCode (Big Pickle Agent)**, alat analisis kode berbasis AI. Analisis didasarkan pada bukti-bukti repository berikut:

- **Riwayat Git** (`git log`, `git shortlog`) — setiap commit, penulis, tanggal, dan pesannya.
- **Statistik Git** (`git shortlog -sne`) — konsolidasi identitas kontributor di berbagai alamat email.
- **Git blame** (`git blame -f -w`) — atribusi kepenulisan baris per baris pada semua file sumber signifikan.
- **Struktur repository** — pohon file dan tata letak proyek saat ini.
- **Analisis kode sumber** — membaca setiap controller, model, view, migration, factory, test, dan file konfigurasi.
- **Pesan commit** — meninjau maksud yang dinyatakan dari setiap perubahan.

AI digunakan secara eksklusif untuk **merangkum dan mengatur** bukti repository ke dalam laporan terstruktur. Tidak ada fitur, kontribusi, atau tanggung jawab yang diciptakan oleh AI. Semua kesimpulan didasarkan pada data Git atau secara eksplisit ditandai sebagai hasil inferensi.

Selain itu, laporan ini menggabungkan **klarifikasi yang diberikan langsung oleh tim pengembang**. Klarifikasi ini membahas kontribusi yang tidak dapat sepenuhnya ditangkap oleh riwayat Git saja.

**Peringatan penting:** Riwayat Git adalah sumber bukti yang penting, tetapi tidak dapat secara sempurna mewakili kontribusi setiap anggota tim. Aktivitas seperti pair programming, perencanaan, debugging, diskusi desain, dan pengujian mungkin tidak meninggalkan jejak langsung di log commit. Laporan ini harus dibaca dengan pemahaman akan keterbatasan ini.

---

## Normalisasi Identitas

Beberapa kontributor menggunakan banyak alamat email. Mereka telah dikonsolidasikan sebagai berikut:

| Nama Ternormalisasi | Nama Author Git | Email yang Dikonsolidasi | Total Commit |
|---|---|---|---|
| Muhammad Fathurrahman | `fathur-md` (42), `fathur-m` (3) | `fathurmuh@outlook.com`, `fathurmh98@gmail.com` | 45 |
| Ferdiyansyah Pratama Putra | `ferdiyansyah pratama putra` (18) | `ferdiyansyahpp@gmail.com`, `aliookeu05@gmail.com`, `222272935+ferdi2104@users.noreply.github.com`, `enricoreyner2703@gmail.com` | 18\* |
| Maria Violeta V. Wungubelen | `wungubelen` (20) | `verawungubelen01@gmail.com` | 20 |
| Julius Flaviano Aleo Keu | `ALIOOKEU` (1) | `aliookeu05@gmail.com` | 1 |
| Enrico Reyner Lumenta | — | — | 0 |

> \* Ferdiyansyah memiliki 18 commit unik yang diatribusikan kepada `ferdiyansyah pratama putra`. 4 commit tambahannya (dilakukan dari `aliookeu05@gmail.com` dan `enricoreyner2703@gmail.com`) tumpang tindih dengan nama author git yang sama, sehingga jumlah sebenarnya adalah 18 commit.

---

## Ringkasan Kontribusi — Bukti Git

| Anggota | Total Commit | File Utama yang Dibuat | Cakupan Git Blame |
|---|---|---|---|
| Muhammad Fathurrahman | 45 (53%) | 20+ file | 100% model, ~78% CampaignController, ~85% DashboardController, ~70% view |
| Maria Violeta V. Wungubelen | 20 (24%) | 5 file | ~5% CampaignController, ~31% view indeks campaign, ~15% view detail campaign |
| Ferdiyansyah Pratama Putra | 18 (21%) | 4 file | ~92% AuthController, ~17% CampaignController, ~100% brand.php |
| Julius Flaviano Aleo Keu | 1 (1%) | 1 file (1 baris) | 0% (baris ditimpa kemudian) |
| Enrico Reyner Lumenta | 0 (0%) | — | — |

> **Catatan:** Persentase tidak berjumlah 100% karena kontribusi tumpang tindih pada file bersama. "Cakupan Git Blame" mengacu pada baris yang masih bertahan di kode produksi saat ini.

---

## Ringkasan Kontribusi — Konfirmasi Tim

| Anggota | Peran (menurut tim) | Deskripsi Kontribusi |
|---|---|---|
| Ferdiyansyah Pratama Putra | Pemimpin Proyek | Mengusulkan ide proyek, merancang fitur, membuat fondasi implementasi awal |
| Muhammad Fathurrahman | Backend & Frontend | Meningkatkan logika backend, menyempurnakan arsitektur, memperbaiki bug, melakukan refactoring dan integrasi kode |
| Julius Flaviano Aleo Keu | Pengembang | Berkontribusi tetapi berbagi laptop/identitas Git dengan Ferdiyansyah; partisipasi diremehkan oleh Git |
| Enrico Reyner Lumenta | Pengembang | Berkontribusi tetapi berbagi laptop/identitas Git dengan Ferdiyansyah; partisipasi tidak tertangkap di Git |
| Maria Violeta V. Wungubelen | Pengembang | Bukti Git selaras dengan pemahaman tim |

---

## Analisis Individu Lengkap

---

### Muhammad Fathurrahman

#### Terverifikasi dari Repository

- **Ringkasan Peran:** Pengembang utama — menulis mayoritas kode produksi.
- **Git Commits:** 45 commit (53% dari seluruh commit).
- **Fitur Utama (bukti Git):**
    - Penyiapan awal proyek (Laravel 13, Vite, Tailwind CSS, Alpine.js)
    - Migration database (users, campaigns, donations, comments)
    - Keempat model (Campaign, Donation, Comment, User) — 100% kepenulisan berdasarkan blame
    - CRUD Campaign — dioptimalkan/direfactor untuk versi produksi (~78% blame CampaignController)
    - Sistem donasi dan sistem komentar — seluruh metode `donate()` dan `comment()`
    - Dashboard pengguna — controller dan view
    - Halaman beranda dengan statistik, kategori, campaign unggulan, testimoni
    - Navigation bar, komponen layout, penyempurnaan footer
    - Halaman about (desain awal dan komponen kartu tim)
    - CampaignFactory, CampaignTest, DashboardTest
    - Konfigurasi Vite, CSS, JavaScript bootstrap
    - Konfigurasi deployment (.env.example, .railwayignore, AppServiceProvider)
    - Dokumentasi README dan AGENTS.md
- **File Penting:** `CampaignController.php`, `Campaign.php`, `Donation.php`, `Comment.php`, `DashboardController.php`, `HomeController.php`, `layout.blade.php`, `navbar.blade.php`, `home/index.blade.php`, `dashboard/index.blade.php`, semua file migration, `CampaignFactory.php`, `CampaignTest.php`, `DashboardTest.php`, `vite.config.js`, `app.css`, `app.js`
- **Tingkat Kontribusi (Git):** Tinggi — penulis utama ~66% baris kode proyek.
- **Tanggung Jawab Bersama:** CampaignController dan view campaign disempurnakan secara kolaboratif dengan Maria Violeta dan Ferdiyansyah. AboutController dibuat oleh Fathurrahman dan kemudian dimodifikasi oleh Ferdiyansyah.

#### Konfirmasi Tim

- Tim mengonfirmasi bahwa kontribusi utama Fathurrahman adalah meningkatkan logika backend, menyempurnakan arsitektur aplikasi, meningkatkan implementasi frontend, memperbaiki bug, meningkatkan stabilitas, melakukan refactoring kode yang ada, serta mengintegrasikan dan memoles fitur yang sudah diimplementasikan sebelumnya.
- Tanggung jawab ini dilakukan **setelah implementasi awal** oleh Ferdiyansyah dan oleh karena itu mungkin tidak selalu tercermin sebagai kepemilikan fitur saja.

---

### Ferdiyansyah Pratama Putra

#### Terverifikasi dari Repository

- **Ringkasan Peran:** Penulis sistem autentikasi dan pembangun awal aplikasi.
- **Git Commits:** 18 commit (21% dari seluruh commit).
- **Fitur Utama (bukti Git):**
    - Sistem autentikasi — AuthController dengan metode showLogin, login, showRegister, register, logout (~92% blame)
    - View login dan registrasi (versi awal)
    - CampaignController awal (235 baris di commit pertama — ~83% kemudian ditimpa oleh refactoring)
    - View campaign awal (index, show, create — draf pertama)
    - DashboardController (versi pertama — kemudian ditulis ulang sebagian besar)
    - `config/brand.php` — penulis tunggal (100% blame)
    - Komponen `footer.blade.php` — versi awal
    - Konfigurasi navigasi (`navigation.php`) — modifikasi
    - Migration tabel user — menambahkan kolom role, phone, avatar
    - Modifikasi tabel campaign, donation, comment
    - AboutController — penambahan anggota tim, penghapusan anggota, pembaruan NIM dan nama
- **File Penting:** `AuthController.php` (penulis tunggal), `auth/login.blade.php` (penulis awal), `auth/register.blade.php` (penulis awal), `config/brand.php` (penulis tunggal), `AboutController.php` (modifikasi), versi awal `CampaignController.php`, `DashboardController.php`, `campaigns/index.blade.php`, `campaigns/show.blade.php`, `campaigns/create.blade.php`
- **Tingkat Kontribusi (Git):** Sedang — sistem autentikasi fondasional dan struktur aplikasi awal. Sebagian besar kode controller awalnya kemudian ditimpa oleh refactoring.
- **Tanggung Jawab Bersama:** CampaignController awalnya ditulis oleh Ferdiyansyah, kemudian direstrukturisasi secara signifikan oleh Fathurrahman dan Maria Violeta. AboutController dibuat oleh Fathurrahman dan dimodifikasi oleh Ferdiyansyah.

#### Konfirmasi Tim

- Tim mengklarifikasi bahwa Ferdiyansyah bertanggung jawab untuk mengusulkan ide awal proyek, merancang fitur utama aplikasi, menghasilkan implementasi awal dari banyak modul proyek, dan membangun fondasi awal aplikasi.
- Konteks ini menjelaskan mengapa kontribusi Git-nya terkonsentrasi di fase awal pengembangan.

---

### Maria Violeta V. Wungubelen

#### Terverifikasi dari Repository

- **Ringkasan Peran:** Penyempurnaan CampaignController dan iterasi view campaign.
- **Git Commits:** 20 commit (24% dari seluruh commit).
- **Fitur Utama (bukti Git):**
    - Penyempurnaan CampaignController — 7 commit: penyesuaian validasi, perbaikan redirect, peningkatan method store
    - View indeks campaign — 5 iterasi: penyesuaian tata letak, peningkatan UI (~31% blame)
    - View detail campaign — restrukturisasi tata letak penuh (33+/-34 baris)
    - View buat campaign — penyesuaian formulir
    - Pendaftaran route untuk endpoint campaign
    - Model ProjectIdea — pembaruan minor
- **File Penting:** `CampaignController.php` (7 commit), `resources/views/campaigns/index.blade.php` (5 commit), `resources/views/campaigns/show.blade.php`, `resources/views/campaigns/create.blade.php`, `routes/web.php`
- **Tingkat Kontribusi (Git):** Sedang — melakukan banyak perbaikan iteratif di seluruh view dan controller campaign. Perubahannya bersifat penyempurnaan, bukan pembuatan fitur orisinal.
- **Tanggung Jawab Bersama:** CampaignController dan semua view campaign dipelihara secara kolaboratif dengan Fathurrahman dan Ferdiyansyah.

#### Konfirmasi Tim

- Tidak ada klarifikasi tambahan yang diberikan oleh tim di luar apa yang sudah ditunjukkan bukti Git. Catatan Git selaras dengan pemahaman tim tentang peran Maria Violeta.

---

### Julius Flaviano Aleo Keu

#### Terverifikasi dari Repository

- **Ringkasan Peran:** Kontributor minor (berdasarkan bukti Git).
- **Git Commits:** 1 commit (1% dari seluruh commit).
- **Fitur Utama (bukti Git):** Tidak ada — satu commit trivial memperbarui detail anggota tim di route debug.
- **File Penting:** `routes/web.php` (2 baris diubah)
- **Tingkat Kontribusi (Git):** Rendah — satu commit minor. Tidak ada baris yang bertahan di kode produksi saat ini.
- **Ketidakpastian:** Username GitHub `ALIOOKEU` (<aliookeu05@gmail.com>) diatribusikan kepada Julius Flaviano Aleo Keu berdasarkan inferensi dari handle email dan kesesuaian nama. Ini adalah inferensi, bukan verifikasi dari data Git saja.

#### Konfirmasi Tim

- Tim mengklarifikasi bahwa Aliokey berkontribusi pada proyek, tetapi **sebagian pekerjaan pengembangan dilakukan menggunakan laptop dan identitas Git yang sama dengan Ferdiyansyah**. Karena alur kerja bersama ini, riwayat Git saja tidak dapat memisahkan secara akurat semua kontribusi Aliokey. Statistik Git mungkin **meremehkan partisipasi aktualnya**.

---

### Enrico Reyner Lumenta

#### Terverifikasi dari Repository

- **Ringkasan Peran:** Tidak ada kontribusi Git terdeteksi.
- **Git Commits:** 0 commit.
- **Fitur Utama (bukti Git):** Tidak ada. Nol commit ditemukan dengan nama atau email apa pun yang dapat diatribusikan kepada Enrico Reyner Lumenta. Tidak ada file di repository yang dibuat oleh anggota tim ini.

#### Konfirmasi Tim

- Tim mengklarifikasi bahwa Rey **berkontribusi pada proyek**, tetapi sebagian pekerjaan diselesaikan pada **mesin pengembangan dan akun Git yang sama** yang digunakan oleh Ferdiyansyah, membuat atribusi individual tidak lengkap dalam riwayat Git. Ketiadaan commit atas nama Rey sendiri tidak selalu menunjukkan kurangnya kontribusi.

---

## Fitur Kolaboratif

| Fitur | Penulis Utama | Kolaborator |
|---|---|---|
| CampaignController | Muhammad Fathurrahman (versi produksi) | Ferdiyansyah (versi awal), Maria Violeta (perbaikan bug/penyempurnaan) |
| View Campaign (index, show, create) | Muhammad Fathurrahman (versi optimal) | Ferdiyansyah (draf awal), Maria Violeta (penyempurnaan UI) |
| DashboardController | Muhammad Fathurrahman (versi produksi) | Ferdiyansyah (kerangka awal) |
| AboutController | Muhammad Fathurrahman (desain awal) | Ferdiyansyah (manajemen anggota tim) |
| Migration Database | Muhammad Fathurrahman (migrasi dasar) | Ferdiyansyah (penambahan/modifikasi kolom) |
| View Autentikasi | Ferdiyansyah (versi awal) | Muhammad Fathurrahman (pembaruan tata letak/styling) |

---

## Ketidakpastian

1. **Enrico Reyner Lumenta** tercantum dalam data tim AboutController dengan peran "backend2" dan NIM 241110093, tetapi memiliki nol commit Git. Ini mungkin menunjukkan pekerjaan di luar repository (misalnya deployment, dokumentasi, kontribusi non-kode) atau tidak ada kontribusi yang dibuat.

2. **Anggahrm** (<58013844+Anggahrm@users.noreply.github.com>) membuat 1 commit (mengubah NIM di web.php). Username GitHub ini tidak cocok dengan anggota tim yang tercantum dan mungkin merupakan kolaborator eksternal atau anggota tim menggunakan alias yang tidak dikenal. Commit bersifat trivial (1 baris diubah).

3. **ALIOOKEU / Julius Flaviano Aleo Keu** diinferensikan dari email `aliookeu05@gmail.com` yang mengandung "keu". Author `ferdiyansyah pratama putra` juga melakukan commit dua kali dari email yang sama, menunjukkan akses mesin bersama.

4. **Jumlah commit tidak sama dengan kualitas atau signifikansi kode.** Commit awal CampaignController Ferdiyansyah menambahkan 235 baris tetapi kemudian sebagian besar ditimpa. 20 commit Maria Violeta mencakup banyak perubahan iteratif kecil, bukan penambahan fitur besar.

---

## Keterbatasan Analisis Berbasis Git

Riwayat Git adalah catatan berharga tentang siapa yang mengubah apa dan kapan, tetapi memiliki titik buta yang relevan dengan proyek ini:

| Keterbatasan | Deskripsi | Relevansi dengan Laporan Ini |
|---|---|---|
| **Komputer pengembangan bersama** | Beberapa pengembang yang bekerja di mesin yang sama dapat melakukan commit dengan identitas Git yang sama. | Ferdiyansyah melakukan commit dari `aliookeu05@gmail.com` (email Aliokey/Rey) dua kali. Tim mengonfirmasi Aliokey dan Rey berbagi laptop dengan Ferdiyansyah. |
| **Pair programming** | Dua pengembang yang bekerja bersama menghasilkan satu commit dengan satu penulis. | CampaignController dikembangkan secara kolaboratif oleh beberapa anggota, tetapi Git mengatribusikan setiap baris hanya kepada satu penulis. |
| **Kolaborasi offline** | Diskusi desain, rapat perencanaan, dan review kode tidak meninggalkan jejak di Git. | Desain fitur (Ferdiyansyah) dan keputusan arsitektur melibatkan semua anggota tim. |
| **Debugging dan pengujian bersama** | Menemukan dan mereproduksi bug bersifat kolaboratif, tetapi hanya commit perbaikan akhir yang tercatat. | 7 commit CampaignController oleh Maria Violeta mencakup perbaikan bug yang mungkin diidentifikasi secara kolaboratif. |
| **Review UI dan umpan balik** | Umpan balik visual tentang tata letak dan styling sering terjadi di luar Git. | Iterasi view campaign oleh Maria Violeta menggabungkan umpan balik dari seluruh tim. |
| **Desain dan spesifikasi fitur** | Memutuskan apa yang akan dibangun dan bagaimana cara kerjanya mendahului commit apa pun. | Peran Ferdiyansyah dalam mengusulkan ide proyek dan merancang fitur tidak tertangkap dalam commit mana pun. |
| **Berbagi pengetahuan** | Membantu rekan tim memahami pola Laravel, sintaks Blade, atau kelas Tailwind. | Anggota yang berpengalaman (Fathurrahman) membantu yang lain, tetapi ini tidak tercermin di Git. |
| **Kontribusi non-kode** | Dokumentasi, riset, manajemen proyek, koordinasi deployment. | Beberapa anggota tim mungkin berkontribusi di area ini tanpa commit kode. |

> **Kesimpulan utama:** Ketiadaan commit Git tidak berarti ketiadaan kontribusi. Laporan ini menggunakan klarifikasi tim untuk mengisi celah yang tidak dapat diatasi oleh analisis berbasis Git saja.

---

## Metodologi

Laporan ini dibuat menggunakan teknik analisis Git berikut:

- **`git shortlog -sne --all`** — Mengidentifikasi semua kontributor unik dan menormalisasi identitas mereka di berbagai alamat email.
- **`git log --all --oneline`** — Meninjau setiap pesan commit untuk memahami tujuan dan ruang lingkup setiap perubahan.
- **`git log --all --stat`** — Memeriksa file mana yang dimodifikasi di setiap commit untuk mengatribusikan pengembangan fitur.
- **`git blame -f -w`** — Menganalisis kepenulisan baris demi baris saat ini dari setiap file sumber penting untuk mengidentifikasi penulis yang masih bertahan dari setiap segmen kode.
- **`git log --all --format="%an %ai"`** — Menentukan periode aktif dan urutan kronologis pekerjaan setiap kontributor.
- **Analisis kode sumber** — Mereferensi silang status saat ini dari setiap controller, model, view, migration, factory, test, dan file konfigurasi dengan data Git blame.
- **Konsolidasi identitas** — Menggabungkan beberapa alamat email dan varian nama untuk orang fisik yang sama.

---

## Disclaimer Akademis

Laporan ini menggabungkan **bukti repository** (riwayat Git, blame, analisis kode sumber) dengan **klarifikasi yang diberikan langsung oleh tim pengembang** untuk menghasilkan representasi yang lebih akurat tentang tanggung jawab setiap anggota.

**Riwayat Git tidak boleh ditafsirkan sebagai satu-satunya indikator kontribusi individu.** Seperti yang dirinci di bagian [Keterbatasan Analisis Berbasis Git](#keterbatasan-analisis-berbasis-git), banyak bentuk kontribusi berharga — pair programming, workstation bersama, diskusi desain, debugging, pengujian, dan berbagi pengetahuan — tidak selalu menghasilkan jejak langsung di log commit.

Klarifikasi tim dalam laporan ini **dilaporkan sendiri oleh para kontributor** dan telah disertakan untuk melengkapi, bukan menggantikan, bukti objektif dari repository. Di mana bukti Git dan klarifikasi tim berbeda, laporan ini menyajikan kedua perspektif sehingga pembaca dapat menarik kesimpulan mereka sendiri.

Dokumen ini ditujukan untuk evaluasi akademis dan mencerminkan upaya rekonstruksi kontribusi terbaik berdasarkan data yang tersedia per 27 Juni 2026.
