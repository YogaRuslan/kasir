<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar User</h4>
                    <?php
                    if($level=='Admin') {
                    ?>
                <p class="card-description">
                    <a href="?page=tambahUser" title="Tambah Produk" 
                        class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                            <span class="text">Tambah User</span></a></p>
                    <?php
                        }
                    ?>
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <?php
                                    if($level=='Admin') {
                                    ?>
                                    <th>Opsi</th>   
                                    <?php
                                            }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM user");
                                while ($data= $sql->fetch_assoc()) {
                                    
                            ?>
                        <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['username']?></td>
                        <td><?php echo str_repeat('-', strlen($data['password']))?></td>
                        <td><?php echo $data['level']?></td>
                        <td>
                        <?php
            if($level=='Admin') {
        ?>
                        <a href="?page=editUser&id=<?php echo $data['id']?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="?page=hapusUser&id=<?php echo $data['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus User Ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                        <?php
            }
        ?>
                    </td>
                 </tr>
                    </tr>
                        <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>