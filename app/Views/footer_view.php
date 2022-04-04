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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    
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
            $('.user_email').val(user_email);
            $('.user_role').val(user_role).trigger('change');
            // Call Modal Edit
            $('#editModalUser').modal('show');
        });

        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const msat_id = $(this).data('msat_id');
            const msat_nama = $(this).data('msat_nama');
            
            // Set data to Form Edit
            $('.msat_id').val(msat_id);
            $('.msat_nama').val(msat_nama);
            // Call Modal Edit
            $('#editModalSatker').modal('show');
        });

        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const ran_id_bbm  = $(this).data('ran_id_bbm');
            const ran_total_bbm = $(this).data('ran_total_bbm');
            const ran_updated_at = $(this).data('ran_updated_at');
            const ran_updated_by = $(this).data('ran_updated_by');
            
            
            // Set data to Form Edit
            $('.ran_id_bbm').val(ran_id_bbm);
            $('.ran_total_bbm').val(ran_total_bbm);
            $('.ran_updated_at').val(ran_updated_at);
            $('.ran_updated_by').val(ran_updated_by);
            // Call Modal Edit
            $('#editModalAlokasiBBM').modal('show');
        });

        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const ran_id = $(this).data('ran_id');
            const ran_nopol = $(this).data('ran_nopol');
            const mbj_id  = $(this).data('mbj_id');
            const mrj_id = $(this).data('mrj_id');
            const mrt_id = $(this).data('mrt_id');
            const msat_id = $(this).data('msat_id');
            const mkon_id = $(this).data('mkon_id');
            const mwil_id = $(this).data('mwil_id');
            const ran_liter = $(this).data('ran_liter');
            // Set data to Form Edit
            $('.ran_id').val(ran_id);
            $('.ran_nopol').val(ran_nopol);
            $('.mbj_id').val(mbj_id).trigger('change');
            $('.mrj_id').val(mrj_id).trigger('change');
            $('.mrt_id').val(mrt_id).trigger('change');
            $('.msat_id').val(msat_id).trigger('change');
            $('.mkon_id').val(mkon_id).trigger('change');
            $('.mwil_id').val(mwil_id).trigger('change');
            $('.ran_liter').val(ran_liter);
            // Call Modal Edit
            $('#editModalKendaraan').modal('show');
        });
        
        // get Edit Kendaraan
        $(document).on('click', '.btn-edit', function(){
            // get data from button edit
            const kartu_id = $(this).data('kartu_id');
            const kartu_tag_no = $(this).data('kartu_tag_no');
            const kartu_ranjen_is  = $(this).data('kartu_ranjen_is');
            const ran_nopol = $(this).data('ran_nopol');
            const ran_satker = $(this).data('ran_satker');
            const kartu_paired = $(this).data('kartu_paired');
            const kartu_paired_tgl = $(this).data('kartu_paired_tgl');
            // Set data to Form Edit
            $('.kartu_id').val(kartu_id);
            $('.kartu_tag_no').val(kartu_tag_no);
            $('.kartu_ranjen_is').val(kartu_ranjen_is);
            $('.ran_nopol').val(ran_nopol);
            $('.ran_satker').val(ran_satker);
            $('.kartu_paired').val(kartu_paired);
            $('.kartu_paired_tgl').val(kartu_paired_tgl);
            // Call Modal Edit
            $('#editModalKartu').modal('show');
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
            const spbu_id = $(this).data('spbu_id');
            // Set data to Form Edit
            $('.spbu_id').val(spbu_id);
            // Call Modal Edit
            $('#deleteModalSPBU').modal('show');
        });
        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const msat_id  = $(this).data('msat_id');
            // Set data to Form Edit
            $('.msat_id').val(msat_id);
            // Call Modal Edit
            $('#deleteModalSatker').modal('show');
        });
        $(document).on('click', '.btn-delete', function(){
            // get data from button edit
            const ran_id_bbm = $(this).data('ran_id_bbm');
            // Set data to Form Edit
            $('.ran_id_bbm').val(ran_id_bbm);
            // Call Modal Edit
            $('#deleteModalAlokasiBBM').modal('show');
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
           ,
           {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                columns: [1,2,3,4,5]
            }
            },
            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                columns: [1,2,3,4,5]
            }
            }],
    } );
    $('#tableLaporanTahunan').DataTable( {
        
    } );
    $('#tableLaporanBulanan').DataTable( {
        
    } );
    $('#tableLaporanHarian').DataTable( {
        
    } );
    $('#tableLaporanSatker').DataTable( {
        
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
				   
				    columns: [ 0, 1, 2,3,4,5,6,7,8]
			    },
			   
		   },
           {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                columns: [1,2,3,4,5,6,7,8]
            }
            },
            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                columns: [1,2,3,4,5,6,7,8]
            }
            }
           ],
    } );

    $('#tableUser').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Daftar User',
			    title: 'Daftar User',
			    exportOptions: {
				   
				    columns: [ 0, 1, 2,3,4]
			    },
			   
		   },
           {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                columns: [1,2,3,4]
            }
            },
            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                columns: [1,2,3,4]
            }
            }
           ],
    } );

    $('#tableAlokasiBBM').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Daftar Alokasi BBM',
			    title: 'Daftar Alokasi BBM',
			    exportOptions: {
				   
				    columns: [ 0]
			    },
			   
		   },
           {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                columns: [1]
            }
            },
            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                columns: [1]
            }
            }
           ],
    } );

    $('#tableSatker').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
			{
			    extend: 'print',
			    text: 'Print',
			    messageTop: 'Daftar Satker',
			    title: 'Daftar Satker',
			    exportOptions: {
				   
				    columns: [ 0, 1]
			    },
			   
		   },
           {
                extend: 'pdf',
                text: 'Pdf',
                exportOptions: {
                columns: [1,2]
            }
            },
            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                columns: [1,2]
            }
            }
           ],
    } );

    });

    
</script>

</body>

</html>