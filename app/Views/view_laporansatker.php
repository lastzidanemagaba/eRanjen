                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Laporan By Satker</h1></center>
                    <center><a href="<?= base_url('LaporanSatker/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Excel</a></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan By Satker</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered table-white" id="tableLaporanSatker" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                        <th colspan="26" bgcolor="blue"><center>PERTAMAX</center></th>
                                        </tr>
                                    <tr>
                                        <th rowspan="3"><center>#</center></th>
                                        <th rowspan="3"><center>No</center></th>
                                        <th rowspan="3"><center>Satker</center></th>
                                        <th rowspan="3"><center>Distribusi TW III</center></th>
                                        <th colspan="6"><center>Juli</center></th>
                                        <th colspan="6"><center>Agustus</center></th>
                                        <th colspan="6"><center>September</center></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><center>Ranjen</center></th>
                                        <th colspan="3"><center>Dukrutin</center></th>
                                        <th colspan="3"><center>Ranjen</center></th>
                                        <th colspan="3"><center>Dukrutin</center></th>
                                        <th colspan="3"><center>Ranjen</center></th>
                                        <th colspan="3"><center>Dukrutin</center></th>
                                    </tr>

                                    <tr>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        
                                    </tr>
                                   
                                    
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        ?>
                                    <?php $no=1; foreach($groupsall as $isi){?>
                            <tr>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-spbu_id="<?= $isi['ran_id'];?>">Detail</a></center>
                                </td>
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi['ran_satker'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                <td><center><?= $isi['ran_liter'];?></center></td>
                                
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

            


    
   

            

    
   