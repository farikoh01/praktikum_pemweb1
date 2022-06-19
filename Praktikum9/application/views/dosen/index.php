<div class="container-fluid mt-4">
  <div>
    <h3 class="text-center mb-2">Daftar Dosen</h3>
  </div>
  <table class="table table-hover table-striped col-sm-12 text-center ">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIDN</th>
        <th>Matakuliah</th>
        <th>Link Course eLena</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_dsn as $dsn) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $dsn->nama; ?> </td>
          <td> <?= $dsn->nidn; ?> </td>
          <td> <?= $dsn->matakuliah; ?> </td>
          <td> <?= $dsn->link; ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
