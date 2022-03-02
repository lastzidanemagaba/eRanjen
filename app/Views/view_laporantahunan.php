                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Laporan Tahunan</h1></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Tahunan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered table-white" id="tableLaporanTahunan" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th colspan="26" bgcolor="blue"><center>PERTAMAX</center></th>
                                        </tr>
                                    <tr>
                                        
                                        <th rowspan="3"><center>No</center></th>
                                        <th rowspan="3"><center>Tahun</center></th>
                                        <th rowspan="3"><center>Alokasi BBM</center></th>
                                        <th colspan="9"><center>RANUM</center></th>
                                        <th colspan="9"><center>RANSUS</center></th>
                                        <th rowspan="2" colspan="3"><center>Dukrutin</center></th>
                                        <th rowspan="2" colspan="2"><center>Jumlah</center></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"><center>R6</center></th>
                                        <th colspan="3"><center>R4</center></th>
                                        <th colspan="3"><center>R2</center></th>
                                        <th colspan="3"><center>R6</center></th>
                                        <th colspan="3"><center>R4</center></th>
                                        <th colspan="3"><center>R2</center></th>
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
                                        <th><center>Alokasi</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
                                        <th><center>Terserap</center></th>
                                        <th><center>Sisa</center></th>
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
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_wilayah'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                <td><center><?= $isi['ran_kondisi'];?></center></td>
                                
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

            


    
   

            

    
   