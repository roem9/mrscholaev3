<!-- modal detail -->
    <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="modalEditUserTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditUserTitle">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url()?>beranda/edit_user_by_id" method="post">
                        <input type="hidden" name="id_user" id="id_user_edit">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama_edit" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk_edit" class="form-control form-control-sm" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir_edit" class="form-control form-control-sm" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Edit Data" class="btn btn-sm btn-success" id="btnSubmitmodalEditUser">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- modal detail -->

<!-- modal detail kosa kata -->
    <div class="modal fade" id="modalKosaKata" tabindex="-1" role="dialog" aria-labelledby="modalKosaKataTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKosaKataTitle">Kosa Kata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <div id="listKata"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- modal detail kosa kata -->

        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info"><strong>Profil</strong></li>
                        <li class="list-group-item"><i class="fa fa-user mr-2"></i><?= $user['nama']?></li>
                        <li class="list-group-item"><i class="fa fa-envelope mr-2"></i><?= $user['email']?></li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><strong>Kelas</strong></li>
                        <?php if($kelas):?>
                            <?php foreach ($kelas as $i => $kelas) :?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><?= $i+1?>. <?= $kelas['nama_kelas']?></span>
                                    <span><a href="<?= base_url()?>materi/program/<?= MD5($kelas['program'])?>" class="btn btn-sm btn-outline-info">masuk</a></span>
                                </li>
                            <?php endforeach;?>
                        <?php else :?>
                            <li class="list-group-item">
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle mr-1 text-warning"></i>Anda belum memiliki kelas. Silahkan hubungi Admin</div>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning"><strong>Password</strong></li>
                        <li class="list-group-item">
                            <div class="alert alert-info"><i class="fa fa-info-circle mr-1 text-info"></i>Isi form berikut ini untuk mengganti password</div>
                            <form action="<?= base_url()?>profil/edit_password" method="post">
                                <input type="hidden" name="id" value="<?= MD5($user['id_user'])?>" readonly>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?= $user['username']?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password Baru</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="konfirm_pass">Konfirm Password</label>
                                    <input type="password" name="password2" id="password2" class="form-control form-control-sm" required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Ubah Password" class="btn btn-sm btn-success" id="btnSubmitEditPassword">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
