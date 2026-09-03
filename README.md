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

U. PERTANYAAN ANALISIS 
1. Apa fungsi git pull ?
2. Apa yang terjadi jika programmer tidak melakukan git pull ?
3. Mengapa main harus dijaga agar tetap stabil?

1. Fungsi git pull
-git pull berfungsi untuk mengambil (fetch) perubahan terbaru dari repositori remote (seperti GitHub/GitLab) sekaligus mencampurkannya (merge) ke dalam branch lokal yang sedang kamu kerjakan.

-Secara teknis, perintah ini adalah gabungan dari dua perintah:
git pull = git fetch + git merge

2. Risiko jika Tidak Melakukan git pull
Jika programmer langsung bekerja dan mencoba push tanpa git pull terlebih dahulu:

-Terjadi Conflict (Merge Conflict): Kode di lokal akan ketinggalan zaman (out-of-date). Saat mencoba memuat perubahan baru ke remote, Git akan menolak (rejected) karena ada perbedaan versi.

-Menimpa Kode Teman Tim: Berisiko menghapus atau menimpa fitur yang sudah dibuat oleh anggota tim lain tanpa disadari.

-Kerja Dua Kali: Kamu harus meluangkan waktu ekstra untuk membedakan dan menyatukan kode secara manual saat konflik terjadi.

3. Alasan Branch main Harus Dijaga Tetap Stabil
Branch main (atau master) adalah sumber kebenaran tunggal (single source of truth) dari suatu proyek.

-Siap Rilis/Deploy: Kode di branch main idealnya adalah versi yang siap diunggah ke production atau diuji coba oleh pengguna kapan saja tanpa error.

-Acuan Anggota Tim: Setiap programmer akan membuat branch baru (feature branch) berdasarkan kode dari main. Jika main rusak atau buggy, semua programmer yang mengambil kode dari situ akan ikut mendapati proyek mereka rusak.

-Mencegah Kaus Pengembangan: Menjaga main tetap bersih membuat riwayat pengembangan proyek tertata rapi dan mudah dilacak jika terjadi masalah.

X. PERTANYAAN CONFLICT 
1. Mengapa conflict terjadi?
2. Apakah conflict berarti Git rusak?
3. Siapa yang harus menentukan versi kode yang benar? 
4. Mengapa komunikasi antar programmer penting?

1.mengapa conflict terjadi?
-Merge conflict terjadi ketika Git tidak dapat menggabungkan perubahan kode secara otomatis.
-Penyebab utamanya adalah ketika dua programmer mengubah baris kode yang sama di file yang sama secara berbeda, atau ketika salah satu programmer menghapus file yang sedang diubah oleh programmer lain.  
2.Tidak. Konflik justru menunjukkan bahwa Git bekerja dengan benar. Git sengaja berhenti dan meminta bantuan manusia agar perubahan kode salah satu tim tidak tertimpa (overwrite) secara tidak sengaja.  
3.Project manager atau pemimpin project tersebut  
4.Komunikasi yang baik mencegah perubahan bertumpuk pada berkas yang sama, mempermudah koordinasi alur kerja, dan mempercepat penyelesaian (resolution) saat konflik kode terjadi.  
