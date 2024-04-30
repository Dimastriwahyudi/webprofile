<style>
  body {
    margin: 0;
    padding: 0;
  }
  .sections {
    display: flex; /* Menggunakan flexbox untuk menyusun elemen secara horizontal */
    justify-content: center; /* Memusatkan elemen-elemen secara horizontal */
  }
  .section {
    text-align: center;
    padding: 20px;
    background-color: #1ccdca; /* Ubah warna background di sini */
    margin: 0 10px; /* Memberikan jarak antar bagian */
    color: white; /* Ubah warna tulisan menjadi putih */
    width: 100%; /* Membuat lebar bagian menjadi penuh */
  }
  .count {
    font-size: 24px;
    font-weight: bold;
  }
  .icon {
    font-size: 48px;
    margin-bottom: 10px;
  }
</style>

<div class="sections">
  <div class="section">
    <i class="icon fas fa-chalkboard-teacher"></i>
    <div class="count">10</div>
    Guru
  </div>

  <div class="section">
    <i class="icon fas fa-user-graduate"></i>
    <div class="count">5</div>
    Tenaga Pendidik
  </div>

  <div class="section">
    <i class="icon fas fa-users"></i>
    <div class="count">10</div>
    Guru Ditambah Tenaga Pendidik
  </div>

  <div class="section">
    <i class="icon fas fa-user-graduate"></i>
    <div class="count">46</div>
    Peserta Didik
  </div>
</div>