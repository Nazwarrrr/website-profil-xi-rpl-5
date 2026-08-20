# Website Profil XI RPL
Website ini merupakan proyek pembelajaran
kolaborasi Git dan GitHub.
## Anggota Tim
1. Nazwar - Project Manager
2. Annur - Developer Profil
3. Azfa - Developer anggota
4. jihan - Developer Kontak


PERTANYAAN REFLEKSI
1. Apa perbedaan bekerja sendiri dengan bekerja menggunakan Git dan GitHub?
2. Apa manfaat branch?
3. Mengapa Pull Request diperlukan?
4. Apa manfaat Code Review?
5. Error apa yang paling sulit kalian selesaikan?
6. Bagaimana kalian menemukan solusinya?
7. Apa kontribusi terbesar kalian dalam kelompok?
8. Jika menjadi programmer profesional, kebiasaan apa dari kegiatan ini yang akan
kalian pertahankan?

JAWABAN

Project Manager (PM)

1. Perbedaan Bekerja Sendiri vs Git & GitHub: Bekerja sendiri dilakukan manual dan berisiko menimpa file, sedangkan Git & GitHub memungkinkan kolaborasi terstruktur via branch dan pencatatan histori commit.

2. Manfaat Branch: Menjaga branch main tetap stabil dan bebas bug dengan memisahkan area eksperimen koding dari proyek utama.

3. Mengapa Pull Request Diperlukan: Berfungsi sebagai pintu kontrol kualitas wajib sebelum kode dari branch fitur digabungkan ke branch utama.

4. Manfaat Code Review: Memastikan kerapian struktur kode, kebenaran rute, dan mencegah adanya file penting yang terhapus secara tidak sengaja.

5. Error Terhitung Paling Sulit: Penolakan push (! [rejected] main -> main (fetch first)) akibat perbedaan histori commit awal di GitHub.

6. Solusi Error: Membaca petunjuk terminal, lalu menggunakan perintah git push --force atau git pull --allow-unrelated-histories.

7. Kontribusi Terbesar: Menyiapkan struktur awal proyek Laravel, mengatur rute/controller dasar, mengundang collaborator, serta mengelola review PR dan merge.

8. Kebiasaan Profesional: Selalu menerapkan review Pull Request, melarang push langsung ke main, dan menjaga dokumentasi repositori.

Developer Fitur (Profil / Anggota)

1. Perbedaan Bekerja Sendiri vs Git & GitHub: Bekerja sendiri memerlukan penggabungan kode manual lewat salin-tempel, sementara Git menggabungkan file otomatis secara sistemik.

2. Manfaat Branch: Memberi ruang aman untuk fokus mengembangkan modul sendiri tanpa takut merusak kodingan anggota lain.

3. Mengapa Pull Request Diperlukan: Menjadi sarana untuk mengajukan hasil pengerjaan fitur agar ditinjau oleh PM sebelum resmi masuk ke proyek utama.

4. Manfaat Code Review: Mendapat masukan berharga terkait kerapian penulisan Blade HTML, efisiensi class CSS, dan struktur file.

5. Error Terhitung Paling Sulit: Terjadinya git conflict saat ada baris kode pada file shared yang bentrok dengan perubahan anggota lain.

6. Solusi Error: Membaca penanda konflik (<<<<<<< HEAD), berdiskusi dengan tim untuk menentukan kode yang dipakai, menghapus tag konflik, lalu commit ulang.

7. Kontribusi Terbesar: Membangun modul Profil/Anggota secara utuh dari Controller hingga tampilan UI Blade Glassmorphism.

8. Kebiasaan Profesional: Selalu membuat branch baru per fitur dan membiasakan git pull origin main sebelum mulai mengoding.

Developer Kontak / Frontend

1. Perbedaan Bekerja Sendiri vs Git & GitHub: Bekerja sendiri rentan kehilangan versi file lama saat terjadi kesalahan, sedangkan Git menyimpan seluruh rekam jejak histori kode.

2. Manfaat Branch: Memungkinkan pengerjaan tampilan dan formulir kontak secara terisolasi tanpa terganggu update fitur lain.

3. Mengapa Pull Request Diperlukan: Memastikan halaman kontak sudah terhubung dengan benar ke rute utama dan tampilannya serasi dengan landing page.

4. Manfaat Code Review: Membantu mendeteksi penulisan tag HTML yang terlewat, typo kelas Tailwind, atau link rute yang rusak.

5. Error Terhitung Paling Sulit: Ditolaknya proses push (non-fast-forward) karena branch lokal tertinggal dari commit terbaru di server remote.

6. Solusi Error: Melakukan git pull origin main untuk memperbarui kode lokal, menyelesaikan penyesuaian, lalu melakukan git push ulang.

7. Kontribusi Terbesar: Membuat antarmuka kartu informasi dan form kontak yang responsif serta memastikan seluruh tombol navigasi terhubung.

8. Kebiasaan Profesional: Menulis pesan commit yang jelas dan deskriptif serta menjaga komunikasi aktif antar sesama developer.
