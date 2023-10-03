<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Guru
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/guru/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Guru" name="keyword" id="keyword" autocomplete="off">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </form>
      </div>
    </div

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Guru</h3>
            <ul class="list-group">
              <?php foreach( $data['guru'] as $guru ) : ?>
                <li class="list-group-item d-flex flex-row justify-content-between">
                  <?= $guru['nama']; ?>
                  <div class="d-flex gap-2">
                  <a class="badge rounded-pill text-bg-primary float-right ml-1" style="text-decoration: none;" href="<?= BASEURL; ?>guru/detail/<?= $guru['id']; ?>">Detail</a>
                  <a class="badge rounded-pill text-bg-success float-right ml-1 tampilModalUbah" style="text-decoration: none;" href="<?= BASEURL; ?>guru/edit/<?= $guru['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $guru['id']; ?>">Edit</a>
                  <a class="badge rounded-pill text-bg-danger float-right ml-1" onclick="return confirm('Anda yakin ingin menghapus data?');" style="text-decoration: none;" href="<?= BASEURL; ?>guru/hapus/<?= $guru['id']; ?>">Hapus</a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/guru/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="guru">Mata Pelajaran</label>
                <input type="text" class="form-control" id="mapel" name="mapel">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>