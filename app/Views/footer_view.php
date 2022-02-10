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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
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
            const ran_id = $(this).data('ran_id');
            const ran_nopol = $(this).data('ran_nopol');
            const ran_bbm_jenis = $(this).data('ran_bbm_jenis');
            const ran_jen = $(this).data('ran_jen');
            const ran_tipe = $(this).data('ran_tipe');
            const ran_satker = $(this).data('ran_satker');
            const ran_wilayah = $(this).data('ran_wilayah');
            const ran_liter = $(this).data('ran_liter');
            const ran_bbm_isi = $(this).data('ran_bbm_isi');
            const ran_spbu = $(this).data('ran_spbu');
            // Set data to Form Edit
            $('.ran_id').val(ran_id);
            $('.ran_nopol').val(ran_nopol);
            $('.ran_bbm_jenis').val(ran_bbm_jenis);
            $('.ran_jen').val(ran_jen);
            $('.ran_tipe').val(ran_tipe);
            $('.ran_satker').val(ran_satker);
            $('.ran_wilayah').val(ran_wilayah);
            $('.ran_liter').val(ran_liter);
            $('.ran_bbm_isi').val(ran_bbm_isi);
            $('.ran_spbu').val(ran_spbu);
            // Call Modal Edit
            $('#editModalKendaraan').modal('show');
        });

    
        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const ran_id = $(this).data('ran_id');
            // Set data to Form Edit
            $('.ran_id').val(ran_id);
            // Call Modal Edit
            $('#deleteModalKendaraan').modal('show');
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
        $('#tableSPBU').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Provisi DKI Jakarta',
			    title: 'Daftar SPBU',
			    exportOptions: {
				   
				    columns: [ 0, 1, 2,3,4,5]
			    },
			   
		   }
           ,'pdf','excel'],
    } );

    $('#tableKendaraan').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Daftar Kendaraan',
			    title: 'Daftar Kendaraan',
			    exportOptions: {
				   
				    columns: [ 0, 1, 2,3,4,5,6,7,8,9]
			    },
			   
		   }
           ,'pdf','excel'],
    } );

    });
</script>

</body>

</html>