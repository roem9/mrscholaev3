        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="<?= base_url()?><?= $redirect?>" class="btn btn-sm btn-success"><i class="fa fa-home mr-1"></i><?= $label_redirect?></a>
                </div>
                <?php foreach ($image as $image) :?>
                    <div class="col-12 col-md-4 ">
                        <img src="<?= base_url()?>assets/img/<?= $image?>" class="img-rounded img-fluid" alt="Cinque Terre">
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>

