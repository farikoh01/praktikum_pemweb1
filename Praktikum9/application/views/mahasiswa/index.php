<div class="container-fluid mt-2">
  <div>
    <h3 class="text-center mb-2">Daftar Mahasiswa</h3>
  </div>
  <table class="table table-hover table-striped col-sm-12 text-center">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>IPK</th>
        <th>Predikat</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_mhs as $mhs) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $mhs->nim; ?> </td>
          <td> <?= $mhs->nama; ?> </td>
          <td> <?= $mhs->jk; ?> </td>
          <td> <?= $mhs->ipk; ?> </td>
          <td> <?= $mhs->predikat(); ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>