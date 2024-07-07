<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Tambah Mobil</h1>
<form id="create-mobil-form" enctype="multipart/form-data">
    <div class="form-group">
        <label>Brand</label>
        <input type="text" name="brand" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#create-mobil-form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '<?= base_url('mobil/store') ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Data berhasil disimpan');
                        window.location.href = '/admin';
                    } else {
                        alert('Gagal menyimpan data');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
