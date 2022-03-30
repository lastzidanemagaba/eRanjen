                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Kartu</h1></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kartu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableSPBU" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nomor Kartu</center></th>
                                            <th><center>Ranjen</center></th>
                                            <th><center>Kendaraan</center></th>
                                            <th><center>Satker</center></th>
                                            <th><center>Pair</center></th>
                                            <th><center>Paired Tgl</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getKartu as $isi){
                                        if($isi['kartu_paired'] == 0){
                                            $kartu_paired_stats = 'Tidak Terhubung';
                                        }
                                        else if($isi['kartu_paired'] == 1){
                                            $kartu_paired_stats = 'Terhubung';
                                        }


                                        if($isi['kartu_ranjen_is'] == 1){
                                            $kartu_ranjen_is = 'Ranjen';
                                        }
                                        else  if($isi['kartu_ranjen_is'] == 2){
                                            $kartu_ranjen_is = 'Dukungan Satker';
                                        }
                                        else  if($isi['kartu_ranjen_is'] == 3){
                                            $kartu_ranjen_is = 'Kupon Dukungan';
                                        }
                                        else  if($isi['kartu_ranjen_is'] == 4){
                                            $kartu_ranjen_is = 'Cadangan';
                                        }?>
                            <tr>
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi['kartu_tag_no'];?></center></td>
                                <td><center><?= $kartu_ranjen_is;?></center></td>
                                <td><center><?= $isi['ran_nopol'];?></center></td>
                                <td><center><?= $isi['ran_satker'];?></center></td>
                                <td><center><?= $kartu_paired_stats;?></center></td>
                                <td><center><?= $isi['kartu_paired_tgl'];?></center></td>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-ran_id ="<?= $isi['ran_id'];?>" data-kartu_tag_no="<?= $isi['kartu_tag_no'];?>"  data-kartu_ranjen_is="<?= $isi['kartu_ranjen_is'];?>" data-ran_nopol="<?= $isi['ran_nopol'];?>" data-ran_satker="<?= $isi['ran_satker'];?>" data-kartu_paired="<?= $isi['kartu_paired'];?>" data-kartu_paired_tgl="<?= $isi['kartu_paired_tgl'];?>">Detail</a></center>
                                    <!--<center><a href="#" class="btn btn-danger btn-sm btn-delete" data-kartu_id ="<?= $isi['ran_id'];?>">Delete</a></center>-->
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

            <form method="post" action="<?= base_url('Kartu/delete');?>">
                <div class="modal fade" id="deleteModalKartu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="hidden" name="kartu_id" class="kartu_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- End of Main Content -->
            <form method="post" action="<?= base_url('Kartu/nyoba');?>">
                <div class="modal fade" id="editModalKartu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">      
                        <div class="form-group">
                                <label>Kartu Ranjen</label>
                                <select name="mrj_id" class="form-control id_ranjen_is" >
                                <?php foreach($groupsranjen_is as $isi):?>
                                <option value="<?= $isi['id_ranjen_is'];?>"><?= $isi['nama_ranjen_is'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="ran_id" class="ran_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Pair</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- Footer -->
            <form method="post" action="<?= base_url('Kartu/add');?>">
                <div class="modal fade" id="addModalKartu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label>No Tag</label>
                                    <input type="text" class="form-control" name="kartu_tag_no" placeholder="kartu_tag_no"required>
                                </div>
                                <div class="form-group">
                                    <label>Kartu</label>
                                    <select name="kartu_ranjen_is" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <?php foreach($groupsranjen_is as $eachx){ ?><option value="<?php echo $eachx["id_ranjen_is"]; ?>"><?php echo $eachx["nama_ranjen_is"]; ?></option>
                                        <?php } ?>
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

            
   