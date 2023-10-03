$(function() {

    $('.tombolTambahData').on('click', function() {

        $('#judulModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');


    })

    
    $('.tampilModalUbah').on('click', function() {

        $('#judulModalLabel').html('Edit Data Siswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc-main/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc-main/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nisn').val(data.nisn);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    })
});

$(function() {

    $('.tombolTambahDataKelas').on('click', function() {

        $('#judulModalLabel').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Tambah Data');


    })

    
    $('.tampilModalUbahKelas').on('click', function() {

        $('#judulModalLabel').html('Edit Data Kelas');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc-main/public/kelas/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc-main/public/kelas/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#kelas').val(data.kelas);
                $('#id').val(data.id);
            }
        });
    })
});

$(function() {

    $('.tombolTambahDataJurusan').on('click', function() {

        $('#judulModalLabel').html('Tambah Data Jurusan');
        $('.modal-footer button[type=submit]').html('Tambah Data');


    })

    
    $('.tampilModalUbahJurusan').on('click', function() {

        $('#judulModalLabel').html('Edit Data Jurusan');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc-main/public/jurusan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc-main/public/jurusan/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    })
});

$(function() {

    $('.tombolTambahDataGuru').on('click', function() {

        $('#judulModalLabel').html('Tambah Data Guru');
        $('.modal-footer button[type=submit]').html('Tambah Data');


    })

    
    $('.tampilModalUbahGuru').on('click', function() {

        $('#judulModalLabel').html('Edit Data Guru');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc-main/public/guru/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc-main/public/guru/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#mapel').val(data.mapel);
                $('#id').val(data.id);
            }
        });
    })
});