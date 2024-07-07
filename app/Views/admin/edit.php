<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Edit Mobil</h1>
<form id="edit-mobil-form" enctype="multipart/form-data">
    <div class="form-group">
        <label>Brand</label>
        <input type="text" name="brand" id="brand" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" id="gambar" class="form-control">
        <input type="hidden" name="gambar_lama" id="gambar_lama">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var mobilId = <?= $mobil['id']; ?>; // Menggunakan PHP langsung di JavaScript

        // Fetch mobil data using AJAX
        $.ajax({
            url: '<?= base_url('admin/edit') ?>/' + mobilId,
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#brand').val(response.brand);
                $('#nama').val(response.nama);
                $('#deskripsi').val(response.deskripsi);
                $('#gambar_lama').val(response.gambar);
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Gagal mengambil data mobil');
            }
        });

        // Handle form submit using AJAX
        $('#edit-mobil-form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '<?= base_url('admin/update') ?>/' + mobilId,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Data berhasil diperbarui');
                        window.location.href = '/admin';
                    } else {
                        alert('Gagal memperbarui data');
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
