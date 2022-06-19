<div class="container-fluid mt-4">
  <div style="margin:20px;">
    <h3 class="text-center mb-2">Daftar Matakuliah</h3>
  </div>
  <table class="table table-hover table-striped col-sm-12 text-center">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kode</th>
        <th>SKS</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_mtkl as $mtkl) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $mtkl->nama; ?> </td>
          <td> <?= $mtkl->kode; ?> </td>
          <td> <?= $mtkl->sks; ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>