<h2>Input Mahasiswa</h2>

<form action="mhsw_proses.php?action=save" method="post">
    <div class="mb-3">
        <label for="mhsw_nim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="mhsw_nim" placeholder="NIM" required>
    </div>
    <div class="mb-3">
        <label for="mhsw_nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="mhsw_nama" placeholder="Nama" required>
    </div>
    <div class="mb-3">
        <label for="mhsw_alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="mhsw_alamat" placeholder="Alamat"></textarea>
    </div>
    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=mhsw" class="btn btn-secondary">Batal</a>
</form>
