<div class="card">
  <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-sm-7">
        <div class="statistics-details d-flex align-items-center justify-content-between">
          <div>
            <p class="statistics-title">Saldo Kas Masjid</p>
            <h3 class="rate-percentage">Rp.<?= number_format(($pemasukan['totalMasukNorp'] - $pengeluaran['totalKeluarNoRp']),0,',','.')?></h3>
          </div>
          <div>
            <p class="statistics-title">Saldo Kas Sosial</p>
            <h3 class="rate-percentage">Rp.1.350.000</h3>
          </div>
          <div>
            <p class="statistics-title">Hak Akses</p>
            <h3 class="rate-percentage"><?= $admin ?></h3>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>