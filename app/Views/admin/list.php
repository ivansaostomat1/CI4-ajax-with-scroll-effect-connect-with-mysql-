<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Daftar Mobil</h1>
<a href="/admin/create" class="btn btn-primary mb-3">Tambah Mobil</a>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Brand</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="mobil-table-body">
        <!-- Data will be loaded here using AJAX -->
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to load data
        function loadMobilData() {
            $.ajax({
                url: '<?= base_url('mobil/getAllMobil') ?>',
                method: 'GET',
                dataType: 'json',
                success: function (response) {
                    var tbody = '';
                    response.forEach(function (mobil) {
                        tbody += '<tr>';
                        tbody += '<td>' + mobil.brand + '</td>';
                        tbody += '<td>' + mobil.nama + '</td>';
                        tbody += '<td>' + mobil.deskripsi + '</td>';
                        tbody += '<td><img src="<?= base_url('uploads') ?>/' + mobil.gambar + '" alt="' + mobil.nama + '" width="70" height="70"></td>';
                        tbody += '<td>';
                        tbody += '<a href="/admin/edit/' + mobil.id + '" class="btn btn-warning btn-sm edit-btn" data-id="' + mobil.id + '">Edit</a> ';
                        tbody += '<button class="btn btn-danger btn-sm delete-btn" data-id="' + mobil.id + '">Delete</button>';
                        tbody += '</td>';
                        tbody += '</tr>';
                    });
                    $('#mobil-table-body').html(tbody);
                }
            });
        }

        // Load data on page load
        loadMobilData();

        // Handle delete button click
        $(document).on('click', '.delete-btn', function () {
            var id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus ini?')) {
                $.ajax({
                    url: '<?= base_url('mobil/delete') ?>/' + id,
                    method: 'DELETE',
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            loadMobilData();
                        }
                    }
                });
            }
        });

        // Handle edit button click
        $(document).on('click', '.edit-btn', function () {
            var id = $(this).data('id');
            // Implement edit functionality using AJAX
        });
    });
</script>

<?= $this->endSection() ?>
