                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Data Kendaraan</h1></center>
                    <center><button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModalKendaraan">Tambah Data</button></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableKendaraan" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nopol</center></th>
                                            <th><center>Jenis BBM</center></th>
                                            <th><center>Ranjen</center></th>
                                            <th><center>Tipe Kendaraan</center></th>
                                            <th><center>Satker</center></th>
                                            <th><center>Wilayah Tugas</center></th>
                                            <th><center>Jumlah Liter</center></th>
                                            <th><center>BBM Isi</center></th>
                                            <th><center>SPBU</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getKendaraan as $isi){?>
                            <tr>
                                
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi['ran_nopol'];?></center></td>
                                <td><center><?= $isi['ran_bbm_jenis'];?></center></td>
                                <td><center><?= $isi['ran_jen'];?></center></td>
                                <td><center><?= $isi['ran_tipe'];?></center></td>
                                <td><center><?= $isi['ran_satker'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_bbm_isi'];?></center></td>
                                <td><center><?= $isi['ran_spbu'];?></center></td>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-ran_id="<?= $isi['ran_id'];?>" data-ran_nopol="<?= $isi['ran_nopol'];?>" data-ran_bbm_jenis="<?= $isi['ran_bbm_jenis'];?>" data-ran_jen="<?= $isi['ran_jen'];?>" data-ran_tipe="<?= $isi['ran_tipe'];?>" data-ran_satker="<?= $isi['ran_satker'];?>" data-ran_wilayah="<?= $isi['ran_wilayah'];?>" data-ran_liter="<?= $isi['ran_liter'];?>" data-ran_bbm_isi="<?= $isi['ran_bbm_isi'];?>" data-ran_spbu="<?= $isi['ran_spbu'];?>">Edit</a></center>
                                    <center><a href="#" class="btn btn-danger btn-sm btn-delete" data-ran_id="<?= $isi['ran_id'];?>">Delete</a></center>
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

            <form method="post" action="<?= base_url('Kendaraan/delete');?>">
                <div class="modal fade" id="deleteModalKendaraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="hidden" name="ran_id" class="ran_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- End of Main Content -->
            <form method="post" action="<?= base_url('Kendaraan/update');?>">
                <div class="modal fade" id="editModalKendaraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label>Nopol</label>
                                <input type="text" class="form-control ran_nopol" name="ran_nopol">
                        </div>
                        <div class="form-group">
                                <label>Jenis BBM</label>
                                <input type="text" class="form-control ran_bbm_jenis" name="ran_bbm_jenis">
                        </div>
                        <div class="form-group">
                                <label>Ranjen</label>
                                <input type="text" class="form-control ran_jen" name="ran_jen">
                        </div>
                        <div class="form-group">
                                <label>Tipe Kendaraan</label>
                                <input type="text" class="form-control ran_tipe" name="ran_tipe">
                        </div>
                        <div class="form-group">
                                <label>Satker</label>
                                <input type="text" class="form-control ran_satker" name="ran_satker">
                        </div>
                        <div class="form-group">
                                <label>Wilayah Tugas</label>
                                <input type="text" class="form-control ran_wilayah" name="ran_wilayah">
                        </div>
                        <div class="form-group">
                                <label>Jumlah Liter</label>
                                <input type="text" class="form-control ran_liter" name="ran_liter">
                        </div>
                        <div class="form-group">
                                <label>BBM Isi</label>
                                <input type="text" class="form-control ran_bbm_isi" name="ran_bbm_isi">
                        </div>
                        <div class="form-group">
                                <label>SPBU</label>
                                <input type="text" class="form-control ran_spbu" name="ran_spbu">
                        </div>
                        

                    
                    
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="ran_id" class="ran_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- Footer -->
    <form method="post" action="<?= base_url('Kendaraan/add');?>">
        <div class="modal fade" id="addModalKendaraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label>Nopol</label>
                            <input type="text" class="form-control" name="ran_nopol" placeholder="Nopol"required>
                        </div>

                        <div class="form-group">
                            <label>Jenis BBM</label>
                            <select name="ran_bbm_jenis" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupsbbm as $each){ ?><option value="<?php echo $each["mbj_id"]; ?>"><?php echo $each["mbj_bbmnama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Ranjen</label>
                            <select name="ran_jen" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupsranjen as $eachx){ ?><option value="<?php echo $eachx["mrj_id"]; ?>"><?php echo $eachx["mrj_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tipe Kendaraan</label>
                            <select name="ran_tipe" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupstipekendaraan as $eachxx){ ?><option value="<?php echo $eachxx["mrt_id"]; ?>"><?php echo $eachxx["mrt_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Satker</label>
                            <select name="ran_satker" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupssatker as $eachxxx){ ?><option value="<?php echo $eachxxx["msat_id"]; ?>"><?php echo $eachxxx["msat_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>     
                        <div class="form-group">
                            <label>Wilayah Tugas</label>
                            <select name="ran_wilayah" class="form-control" required>
                                <option value="">-Pilih-</option>
                                    <?php foreach($groupswilayahtugas as $eachxxxx){ ?><option value="<?php echo $eachxxxx["mwil_id"]; ?>"><?php echo $eachxxxx["mwil_nama"]; ?></option>
                                    <?php } ?>
                            </select>
                        </div>        
                        <div class="form-group">
                            <label>Jumlah Liter</label>
                            <input type="number" class="form-control" name="ran_liter" placeholder="Jumlah Liter">
                        </div>        
                        <div class="form-group">
                            <label>BBM Isi</label>
                            <select name="ran_bbm_isi" class="form-control" required>
                                <option value="">-Pilih-</option>
                                        <?php foreach($groupsspbu as $eachxxxxx){ ?><option value="<?php echo $eachxxxxx["spbu_id"]; ?>"><?php echo $eachxxxxx["spbu_kerjasama"]; ?></option>
                                        <?php } ?>
                                </select>
                            </select>
                        </div>        
                        <div class="form-group">
                            <label>SPBU</label>
                            <select name="ran_spbu" class="form-control" required >
                            <option value="">-Pilih-</option>
                                        <?php foreach($groupsspbu as $eachxxxxx){ ?><option value="<?php echo $eachxxxxx["spbu_id"]; ?>"><?php echo $eachxxxxx["spbu_nama"]; ?></option>
                                        <?php } ?>
                                </select>
                            </select>
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


    
   

            

    
   