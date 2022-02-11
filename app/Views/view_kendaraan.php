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
                                            <th><center>Kondisi</center></th>
                                            <th><center>Wilayah Tugas</center></th>
                                            <th><center>Jumlah Liter</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        ?>
                                    <?php $no=1; foreach($groupsall as $isi){?>
                            <tr>
                                
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi['ran_nopol'];?></center></td>
                                <td><center><?= $isi['ran_bbm_jenis'];?></center></td>
                                <td><center><?= $isi['ran_jen'];?></center></td>
                                <td><center><?= $isi['ran_tipe'];?></center></td>
                                <td><center><?= $isi['ran_satker'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-ran_id="<?= $isi['ran_id'];?>" data-ran_nopol="<?= $isi['ran_nopol'];?>" data-mbj_id ="<?= $isi['mbj_id'];?>" data-mrj_id ="<?= $isi['mrj_id'];?>" data-mrt_id="<?= $isi['mrt_id'];?>" data-msat_id ="<?= $isi['msat_id'];?>" data-mkon_id="<?= $isi['mkon_id'];?>" data-mwil_id="<?= $isi['mwil_id'];?>" data-ran_liter="<?= $isi['ran_liter'];?>">Edit</a></center>
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
                                <input type="text" class="form-control ran_nopol" name="ran_nopol" >
                        </div>
                        <div class="form-group">
                                <label>Jenis BBM</label>
                                <select name="mbj_id" class="form-control mbj_id" >
                                <?php foreach($groupsbbm as $isia):?>
                                <option value="<?= $isia['mbj_id'];?>"><?= $isia['mbj_bbmnama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Ranjen</label>
                                <select name="mrj_id" class="form-control mrj_id" >
                                <?php foreach($groupsranjen as $isi):?>
                                <option value="<?= $isi['mrj_id'];?>"><?= $isi['mrj_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Tipe Kendaraan</label>
                                <select name="mrt_id" class="form-control mrt_id" >
                                <?php foreach($groupstipekendaraan as $isi):?>
                                <option value="<?= $isi['mrt_id'];?>"><?= $isi['mrt_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Satker</label>
                                <select name="msat_id" class="form-control msat_id" >
                                <?php foreach($groupssatker as $isi):?>
                                <option value="<?= $isi['msat_id'];?>"><?= $isi['msat_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kondisi</label>
                            <select name="mkon_id" class="form-control mkon_id" >
                                <?php foreach($groupskondisi as $isia):?>
                                <option value="<?= $isia['mkon_id'];?>"><?= $isia['mkon_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Wilayah Tugas</label>
                                <select name="mwil_id" class="form-control mwil_id" >
                                <?php foreach($groupswilayahtugas as $isi):?>
                                <option value="<?= $isi['mwil_id'];?>"><?= $isi['mwil_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Jumlah Liter</label>
                                <input type="text" class="form-control ran_liter" name="ran_liter" required>
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
                            <select name="mbj_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupsbbm as $each){ ?><option value="<?php echo $each["mbj_id"]; ?>"><?php echo $each["mbj_bbmnama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Ranjen</label>
                            <select name="mrj_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupsranjen as $eachx){ ?><option value="<?php echo $eachx["mrj_id"]; ?>"><?php echo $eachx["mrj_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tipe Kendaraan</label>
                            <select name="mrt_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupstipekendaraan as $eachxx){ ?><option value="<?php echo $eachxx["mrt_id"]; ?>"><?php echo $eachxx["mrt_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Satker</label>
                            <select name="msat_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupssatker as $eachxxx){ ?><option value="<?php echo $eachxxx["msat_id"]; ?>"><?php echo $eachxxx["msat_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>     
                        <div class="form-group">
                            <label>Kondisi</label>
                            <select name="mkon_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                    <?php foreach($groupskondisi as $eachxxxxdea){ ?><option value="<?php echo $eachxxxxdea["mkon_id"]; ?>"><?php echo $eachxxxxdea["mkon_nama"]; ?></option>
                                    <?php } ?>
                            </select>
                        </div>       
                        <div class="form-group">
                            <label>Wilayah Tugas</label>
                            <select name="mwil_id" class="form-control" required>
                                <option value="">-Pilih-</option>
                                    <?php foreach($groupswilayahtugas as $eachxxxx){ ?><option value="<?php echo $eachxxxx["mwil_id"]; ?>"><?php echo $eachxxxx["mwil_nama"]; ?></option>
                                    <?php } ?>
                            </select>
                        </div>        
                        <div class="form-group">
                            <label>Jumlah Liter</label>
                            <input type="number" class="form-control" name="ran_liter" placeholder="Jumlah Liter">
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


    
   

            

    
   