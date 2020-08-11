    <div class="container" id="container-content">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group">
                    <label for="font">Ukuran Font</label>
                    <select name="font" id="font" class="form-control form-control-sm">
                        <option value="16px">Pilih Ukuran Font</option>
                        <option value="16px">16</option>
                        <option value="18px">18</option>
                        <option value="20px">20</option>
                        <option value="22px">22</option>
                        <option value="24px">24</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-danger d-flex justify-content-between">Fi'il Madhi</li>
                    <li class="list-group-item" id="baku">Fi'il Madhi adalah kata kerja yang digunakan untuk menyatakan pekerjaan yang telah terjadi atau lampau</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <a href="<?= base_url()?>tahmidi/fiil" class="btn btn-sm btn-success text-light"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <div class="row">
            <?php foreach($kata as $kata) :?>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between"><span><?= $kata['kata']?></span></div>
                        <div class="card-header d-flex justify-content-between"><?= $kata['arti']?></div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <form action="<?= base_url()?>tahmidi/fiil/latihanmadhi" method="post">
                                        <input type="hidden" name="id" value="<?= $kata['id']?>">
                                        <input type="hidden" name="kata" value="<?= $kata['kata']?>">
                                        <input type="hidden" name="arti" value="<?= $kata['arti']?>">
                                        <input type="hidden" name="latihan" value="<?= $kata['latihan']?>">
                                        <div class="d-flex justify-content-between">
                                            <?php if($kata['status'] == 'on'):?>
                                                <input type="submit" value="Mulai Latihan" class="btn btn-success btn-sm">
                                                <span class="btn btn-sm"><i class="fa fa-check-circle text-success"></i></span>
                                            <?php else :?>
                                                <input type="submit" value="Mulai Latihan" class="btn btn-danger btn-sm">
                                                <span class="btn btn-sm"><i class="fa fa-times-circle text-danger"></i></span>
                                            <?php endif;?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
      </div>
    </div>
</div>

<div class="overlay"></div>