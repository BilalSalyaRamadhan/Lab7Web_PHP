Nama: Bilal Salya Ramadhan
NIM:312510178
Kelas: I251B

<img width="1366" height="768" alt="8 (2-2)" src="https://github.com/user-attachments/assets/abe20597-87e4-4de7-8358-1f0bf052398d" />
<img width="1366" height="768" alt="8 (1-2)" src="https://github.com/user-attachments/assets/0fa6accf-aa62-4313-bcee-219b338b93b7" />
<img width="1366" height="768" alt="7 (3-3)" src="https://github.com/user-attachments/assets/ff0285ad-2801-4b75-8e8e-46ae1078365b" />
<img width="1366" height="768" alt="7 (2-3)" src="https://github.com/user-attachments/assets/8a23e20a-5d0f-4411-bc2d-145ea19764c8" />
<img width="1366" height="768" alt="7 (1-3)" src="https://github.com/user-attachments/assets/03f4913e-cd1b-4221-bb42-4cded6dfd51b" />
<img width="1366" height="768" alt="6 (3-3)" src="https://github.com/user-attachments/assets/834ebd6d-3d14-461a-a366-5fbc5f751c1e" />
<img width="1366" height="768" alt="6 (2-3)" src="https://github.com/user-attachments/assets/06b30a93-05ea-4c7a-af25-573f880a8f4c" />
<img width="1366" height="768" alt="6 (1-3)" src="https://github.com/user-attachments/assets/b0df2e16-451a-4083-b2a6-b98a715f1897" />
<img width="1366" height="768" alt="5 (2-2)" src="https://github.com/user-attachments/assets/eb9481b3-f326-4bea-af2f-679d43560a59" />
<img width="1366" height="768" alt="5 (1-2)" src="https://github.com/user-attachments/assets/002cfbdf-4a71-4ab0-b8ec-223ea39be029" />
<img width="1366" height="768" alt="4 (2-2)" src="https://github.com/user-attachments/assets/4f23ba0a-3727-4ac8-aed4-d06bf36e3587" />
<img width="1366" height="768" alt="4 (1-2)" src="https://github.com/user-attachments/assets/ed70fb10-a309-4bbb-ae65-d9a919933ee5" />
<img width="1366" height="768" alt="3 (2-2)" src="https://github.com/user-attachments/assets/bee9a4bb-5760-487f-b060-25137f084a4e" />
<img width="1366" height="768" alt="3 (1-2)" src="https://github.com/user-attachments/assets/ce588207-747a-46bd-b3f6-5815d268ad65" />
<img width="1366" height="768" alt="2 (2-2)" src="https://github.com/user-attachments/assets/972f7bd8-4e3b-42bd-8947-e578d2323518" />
<img width="1366" height="768" alt="2 (1-2)" src="https://github.com/user-attachments/assets/58fbedd8-7114-4063-bcef-7b9e1989999f" />
<img width="1366" height="768" alt="1" src="https://github.com/user-attachments/assets/bbbac560-c4a3-4a1c-ae02-932dddb573e5" />

---

1. Apa perbedaan pemrosesan client-side dan server-side?
Jawaban:
- Client-Side: Pemrosesan terjadi di perangkat pengguna (browser) menggunakan teknologi seperti HTML, CSS, dan JavaScript. Kelebihannya cepat dan interaktif karena tidak perlu bolak-balik meminta data ke server untuk hal-hal kecil. Kekurangannya, kode dapat dilihat dan dimodifikasi oleh pengguna, serta sangat bergantung pada spesifikasi perangkat klien.
- Server-Side: Pemrosesan terjadi di komputer server sebelum hasilnya dikirim ke browser (menggunakan bahasa seperti PHP, Python, atau Node.js). Cocok untuk mengakses database, memproses transaksi, atau mengamankan data sensitif karena kodenya tersembunyi dari pengguna.

2. Mengapa file PHP harus dijalankan melalui web server?
Jawaban: PHP adalah bahasa pemrograman yang bersifat server-side. Browser web (seperti Chrome atau Firefox) tidak dapat menerjemahkan kode PHP secara langsung; browser hanya mengerti HTML, CSS, dan JavaScript. Oleh karena itu, web server (seperti Apache atau Nginx) yang dilengkapi dengan interpreter PHP bertugas membaca, mengeksekusi kode PHP tersebut, lalu mengubahnya menjadi format HTML standar sebelum dikirim ke browser pengguna.

3. Apa fungsi tanda $ pada variabel PHP?
Jawaban: Tanda $ (dollar sign) digunakan sebagai penanda awalan untuk mendeklarasikan atau memanggil sebuah variabel di PHP (contoh: $nama = "Budi";). Tanda ini wajib digunakan agar interpreter PHP dapat membedakan dengan jelas mana yang merupakan variabel, mana yang merupakan kata kunci (keyword) bawaan PHP, atau sekadar teks biasa.

4. Apa perbedaan metode GET dan POST?
Jawaban:
- GET: Mengirim data melalui URL (terlihat di address bar). Kapasitas datanya terbatas (maksimal sekitar 2048 karakter), tidak aman untuk data sensitif seperti password, tetapi datanya dapat di-bookmark dan cocok digunakan untuk pencarian (search).
- POST: Mengirim data melalui HTTP body (tersembunyi dari URL). Kapasitas data jauh lebih besar (bisa untuk mengunggah file besar), lebih aman karena tidak terpampang di URL, dan tidak bisa di-bookmark secara langsung.

5. Mengapa input pengguna perlu divalidasi di sisi server?
Jawaban: Meskipun validasi bisa dilakukan di sisi klien (browser) menggunakan JavaScript, validasi tersebut sangat mudah dilewati atau dimatikan oleh pengguna yang berniat usil. Validasi di sisi server wajib dilakukan karena:
- Menjaga keamanan aplikasi dari serangan seperti SQL Injection atau XSS.
- Memastikan data yang masuk ke database benar-benar bersih dan sesuai format.
- Mencegah korupsi data jika JavaScript di browser pengguna mengalami gangguan atau dinonaktifkan.

6. Apa fungsi htmlspecialchars() ketika menampilkan data dari form?
Jawaban: Fungsi htmlspecialchars() mengubah karakter-karakter khusus HTML (seperti <, >, &, ", dan ') menjadi entitas HTML yang aman (contohnya < menjadi &lt;).
Fungsi utamanya adalah untuk mencegah serangan XSS (Cross-Site Scripting), di mana peretas mencoba memasukkan kode berbahaya (seperti skrip JavaScript) melalui input form agar dieksekusi oleh browser pengguna lain.

7. Apa manfaat penggunaan function dalam program PHP?
Jawaban:
- Reusability (Penggunaan Kembali): Memungkinkan kita menulis blok kode satu kali dan memanggilnya berkali-kali di bagian program yang berbeda, sehingga menerapkan prinsip DRY (Don't Repeat Yourself).
- Maintainability (Kemudahan Pemeliharaan): Jika ada perubahan logika atau perbaikan bug, kita hanya perlu mengubahnya di dalam satu fungsi tersebut tanpa harus mengubah banyak baris kode di seluruh file.
- Modularity (Modularitas): Memecah program yang besar dan rumit menjadi bagian-bagian kecil yang lebih terstruktur, mudah dibaca, dan lebih mudah di-debug.
