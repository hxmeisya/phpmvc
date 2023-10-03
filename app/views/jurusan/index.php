<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Jurusan
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/jurusan/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Jurusan" name="keyword" id="keyword" autocomplete="off">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </form>
      </div>
    </div

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Jurusan</h3>
            <ul class="list-group">
              <?php foreach( $data['jurusan'] as $jurusan ) : ?>
                <li class="list-group-item d-flex flex-row justify-content-between">
                  <?= $jurusan['jurusan']; ?>
                  <div class="d-flex gap-2">
                  <a class="badge rounded-pill text-bg-primary float-right ml-1" style="text-decoration: none;" href="<?= BASEURL; ?>jurusan/detail/<?= $jurusan['id']; ?>">Detail</a>
                  <a class="badge rounded-pill text-bg-success float-right ml-1 tampilModalUbah" style="text-decoration: none;" href="<?= BASEURL; ?>jurusan/edit/<?= $jurusan['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $jurusan['id']; ?>">Edit</a>
                  <a class="badge rounded-pill text-bg-danger float-right ml-1" onclick="return confirm('Anda yakin ingin menghapus data?');" style="text-decoration: none;" href="<?= BASEURL; ?>jurusan/hapus/<?= $jurusan['id']; ?>">Hapus</a>
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
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Jurusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
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