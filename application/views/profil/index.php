<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Daftar Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <div class="listGroup"></div>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

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
                                    <?php if($kelas['program'] == "Full Time 1"):?>
                                        <span><a href="#daftarIsi" data-toggle="modal" data-id="<?= $kelas['nama_kelas'] . "|" . $kelas['program']?>" class="btn btn-sm btn-info img-shadow btnMulai">materi</a></span>
                                    <?php else :?>
                                        <span><a href="<?= base_url()?>materi/program/<?= MD5($kelas['program'])?>" class="btn btn-sm btn-info img-shadow">mulai</a></span>
                                    <?php endif;?>
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
<script>
    $(".btnMulai").click(function(){
        let html = "";
        let data = $(this).data("id");
        data = data.split("|")
        if(data[1] == "Full Time 1"){
            html = `
                <li class="list list-group-item d-flex justify-content-between">1. Mufrodat Full Time 1 <span><a href="<?= base_url()?>ft_1/mufrodat" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
                <li class="list list-group-item d-flex justify-content-between">2. Qowaid Full Time 1 <span><a href="<?= base_url()?>ft_1/qowaid" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
                <li class="list list-group-item d-flex justify-content-between">3. Ibarah Jilid 1 <span><a href="<?= base_url()?>ibarah/awwal" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
            `;
        }

        $("#daftarIsiTitle").html(data[0])
        $(".listGroup").html(html);
    })
</script>