                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Data SPBU</h1></center>
                    <center><button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModalSPBU">Tambah Data</button></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data SPBU</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableSPBU" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Kode SPBU</center></th>
                                            <th><center>Nama SPBU</center></th>
                                            <th><center>Wilayah SPBU</center></th>
                                            <th><center>Alamat</center></th>
                                            <th><center>Kerjasama</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getSPBU as $isi){?>
                            <tr>
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi['spbu_kode'];?></center></td>
                                <td><center><?= $isi['spbu_nama'];?></center></td>
                                <td><center><?= $isi['spbu_wilayah'];?></center></td>
                                <td><center><?= $isi['spbu_alamat'];?></center></td>
                                <td><center><?= $isi['spbu_kerjasama'];?></center></td>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-spbu_id="<?= $isi['spbu_id'];?>" data-spbu_kode="<?= $isi['spbu_kode'];?>" data-spbu_nama="<?= $isi['spbu_nama'];?>" data-spbu_wilayah="<?= $isi['spbu_wilayah'];?>" data-spbu_alamat="<?= $isi['spbu_alamat'];?>" data-spbu_kerjasama="<?= $isi['spbu_kerjasama'];?>">Edit</a></center>
                                    <center><a href="#" class="btn btn-danger btn-sm btn-delete" data-spbu_id="<?= $isi['spbu_id'];?>">Delete</a></center>
                                </td>
                            </tr>
                        <?php $no++;}?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

            <form method="post" action="<?= base_url('SPBU/delete');?>">
                <div class="modal fade" id="deleteModalSPBU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                    <h4>Apakah Kamu Yakin Ingin Menghapus ?</h4>
                    
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="spbu_id" class="spbu_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- End of Main Content -->
            <form method="post" action="<?= base_url('SPBU/update');?>">
                <div class="modal fade" id="editModalSPBU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">      
                        <div class="form-group">
                            <label>Kode SPBU</label>
                            <input type="text" class="form-control spbu_kode" name="spbu_kode" placeholder="Kode SPBU">
                        </div>

                        <div class="form-group">
                            <label>Nama SPBU</label>
                            <input type="text" class="form-control spbu_nama" name="spbu_nama" placeholder="Nama SPBU">
                        </div>
                        
                        <div class="form-group">
                            <label>Wilayah SPBU</label>
                            <input type="text" class="form-control spbu_wilayah" name="spbu_wilayah" placeholder="Wilayah SPBU">
                        </div>

                        <div class="form-group">
                            <label>Wilayah SPBU</label>
                            <input type="text" class="form-control spbu_alamat" name="spbu_alamat" placeholder="Alamat SPBU">
                        </div>

                        <div class="form-group">
                            <label>Kerjasama</label>
                            <input type="text" class="form-control spbu_kerjasama" name="spbu_kerjasama" placeholder="Kerjasama">
                        </div>
                    
                    
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="spbu_id" class="spbu_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- Footer -->
    <form method="post" action="<?= base_url('SPBU/add');?>">
        <div class="modal fade" id="addModalSPBU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Kode SPBU</label>
                            <input type="text" class="form-control" name="spbu_kode" placeholder="Kode SPBU"required>
                        </div>

                        <div class="form-group">
                            <label>Nama SPBU</label>
                            <input type="text" class="form-control" name="spbu_nama" placeholder="Nama SPBU">
                        </div>
                        
                        <div class="form-group">
                            <label>Wilayah SPBU</label>
                            <input type="text" class="form-control" name="spbu_wilayah" placeholder="Wilayah SPBU" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat SPBU</label>
                            <input type="text" class="form-control" name="spbu_alamat" placeholder="Alamat SPBU" required>
                        </div>


                        <div class="form-group">
                            <label>Kerjasama</label>
                            <input type="text" class="form-control" name="spbu_kerjasama" placeholder="Kerjasama">
                        </div>             
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
   