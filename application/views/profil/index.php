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
                        <li class="list-group-item list-group-item-success"><strong>Kelas</strong></li>
                        <?php if($kelas):?>
                            <?php foreach ($kelas as $i => $kelas) :?>
                                <li class="list-group-item d-flex justify-content-between shadow-md">
                                    <span><?= $kelas['nama_kelas']?></span>
                                    <span><a href="<?= base_url()?>materi/program/<?= MD5($kelas['program'])?>" class="btn btn-sm btn-info img-shadow">mulai</a></span>
                                </li>
                            <?php endforeach;?>
                        <?php else :?>
                            <li class="list-group-item">
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle mr-1 text-warning"></i>Anda belum memiliki kelas. Silahkan hubungi Admin</div>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>