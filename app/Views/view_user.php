                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <center><h1 class="h3 mb-2 text-gray-800">Master User</h1></center>
                    <center><button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModalUser">Tambah Data</button></center>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Master User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Username</center></th>
                                            <th><center>Email</center></th>
                                            <th><center>Role</center></th>
                                            <th><center>Created At</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach($getUser as $isi){?>
                            <tr>
                                <?php if ($isi->user_role == 1) 
                                {
                                    $role = 'User';
                                }
                                else if ($isi->user_role == 2) 
                                {
                                    $role = 'Admin';
                                }
                                else if ($isi->user_role == 3) 
                                {
                                    $role = 'SuperAdmin';
                                }
                                ?>
                                <td><center><?= $no;?></center></td>
                                <td><center><?= $isi->user_nama;?></center></td>
                                <td><center><?= $isi->user_email;?></center></td>
                                <td><center><?= $role;?></center></td>
                                <td><center><?= $isi->user_created_at;?></center></td>
                                <td>
                                    <center><a href="#" class="btn btn-info btn-sm btn-edit" data-user_id="<?= $isi->user_id;?>" data-user_nama="<?= $isi->user_nama;?>" data-user_email="<?= $isi->user_email;?>" data-user_role="<?= $isi->user_role;?>">Edit</a></center>
                                    <center><a href="#" class="btn btn-danger btn-sm btn-delete" data-user_id="<?= $isi->user_id;?>">Delete</a></center>
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

            <form method="post" action="<?= base_url('User/delete');?>">
                <div class="modal fade" id="deleteModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="hidden" name="user_id" class="user_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <!-- End of Main Content -->
            <form method="post" action="<?= base_url('User/update');?>">
                <div class="modal fade" id="editModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label>Username</label>
                            <input type="text" class="form-control user_nama" name="user_nama" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control user_email" name="user_email" placeholder="Email">
                        </div>

                       

                        <div class="form-group">
                                <label>Role</label>
                                <select name="user_role" class="form-control user_role" >
                                <?php foreach($groupsrole as $isi):?>
                                <option value="<?= $isi['role_id'];?>"><?= $isi['role_nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                        
                        
                        

                    
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" class="user_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>

            <form method="post" action="<?= base_url('User/add');?>">
        <div class="modal fade" id="addModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label>Username</label>
                            <input type="text" class="form-control" name="user_nama" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="user_email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                            <select name="user_role" class="form-control" required>
                                <option value="">-Pilih-</option>
                                <?php foreach($groupsrole as $each){ ?><option value="<?php echo $each["role_id"]; ?>"><?php echo $each["role_nama"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="user_pass" placeholder="Password">
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
            <!-- Footer -->
    