<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; JTI 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
    $(document).ready(function(){
        // get Edit SPBU
        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const spbu_id = $(this).data('spbu_id');
            const spbu_nama = $(this).data('spbu_nama');
            const spbu_kode = $(this).data('spbu_kode');
            const spbu_alamat = $(this).data('spbu_alamat');
            const spbu_wilayah = $(this).data('spbu_wilayah');
            const spbu_kerjasama	 = $(this).data('spbu_kerjasama');
            // Set data to Form Edit
            $('.spbu_id').val(spbu_id);
            $('.spbu_nama').val(spbu_nama);
            $('.spbu_kode').val(spbu_kode);
            $('.spbu_alamat').val(spbu_alamat);
            $('.spbu_wilayah').val(spbu_wilayah);
            $('.spbu_kerjasama').val(spbu_kerjasama);
            // Call Modal Edit
            $('#editModalSPBU').modal('show');
        });
        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const user_id = $(this).data('user_id');
            const user_nama = $(this).data('user_nama');
            const user_email = $(this).data('user_email');
            const user_role = $(this).data('user_role');
            // Set data to Form Edit
            $('.user_id').val(user_id);
            $('.user_nama').val(user_nama);
            $('.user_email').val(user_email).trigger('change');
            $('.user_role').val(user_role).trigger('change');
            // Call Modal Edit
            $('#editModalUser').modal('show');
        });
        
        // get Edit Kartu
        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const id = $(this).data('id');
            const nopol = $(this).data('nopol');
            const jenis_bbm = $(this).data('jenis_bbm');
            const ranjen = $(this).data('ranjen');
            const tipe_kendaraan = $(this).data('tipe_kendaraan');
            const keterangan = $(this).data('keterangan');
            const satker = $(this).data('satker');
            const wilayah_tugas = $(this).data('wilayah_tugas');
            const kondisi = $(this).data('kondisi');
            const jumlah_liter = $(this).data('jumlah_liter');
            const tempat_pengisian_bbm = $(this).data('tempat_pengisian_bbm');
            const spbu = $(this).data('spbu');
            const wilayah_spbu = $(this).data('wilayah_spbu');
            const kode_spbu = $(this).data('kode_spbu');
            // Set data to Form Edit
            $('.id').val(id);
            $('.nopol').val(nopol);
            $('.jenis_bbm').val(jenis_bbm).trigger('change');
            $('.ranjen').val(ranjen).trigger('change');
            $('.tipe_kendaraan').val(tipe_kendaraan).trigger('change');
            $('.keterangan').val(keterangan);
            $('.satker').val(satker).trigger('change');
            $('.wilayah_tugas').val(wilayah_tugas).trigger('change');
            $('.kondisi').val(kondisi).trigger('change');
            $('.jumlah_liter').val(jumlah_liter).trigger('change');
            $('.tempat_pengisian_bbm').val(tempat_pengisian_bbm).trigger('change');
            $('.spbu').val(spbu).trigger('change');
            $('.wilayah_spbu').val(wilayah_spbu).trigger('change');
            $('.kode_spbu').val(kode_spbu);
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });

        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const user_id = $(this).data('user_id');
            // Set data to Form Edit
            $('.user_id').val(user_id);
            // Call Modal Edit
            $('#deleteModalUser').modal('show');
        });
        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const id_spbu = $(this).data('id_spbu');
            // Set data to Form Edit
            $('.id_spbu').val(id_spbu);
            // Call Modal Edit
            $('#deleteModalSPBU').modal('show');
        });
        $(document).on('click', '.btn-warning', function(){
            // get data from button edit
            const id_spbu = $(this).data('id_spbu');
            // Set data to Form Edit
            $('.id_spbu').val(id_spbu);
            // Call Modal Edit
            $('#logoutModal').modal('show');
        });
        $('#contoh').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Provisi DKI Jakarta',
			    title: 'Daftar SPBU',
			    exportOptions: {
				   
				    columns: [ 0, 1, 2,3]
			    },
			   
		   }
		],
    } );
    });
</script>

</body>

</html>