
<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Materi Full Time 1</h5>
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
            <div class="row">
                <div class="col-4 col-md-4 mb-3">
                    <span><a href="#daftarIsi" data-toggle="modal" class="btn btn-sm btn-success img-shadow btnMulai"><i class="fa fa-book mr-2"></i>materi</a></span>
                </div>
                <?php 
                    foreach ($tema as $tema) :?>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card rounded-lg <?= $tema['kemajuan'] != "100" ? "border-danger" : "border-primary";?>">
                                <div class="card-header d-flex justify-content-center <?= $tema['kemajuan'] != "100" ? "list-group-item-danger" : "list-group-item-primary";?>">
                                    <span class="text-dark arab"><?= angka_arab($tema['bab']) . " " . $tema['title']?><span>
                                </div>
                                <div class="card-body">
                                    <a href="#daftarIsi" data-id="<?= $tema['bab']?>" data-toggle="modal" class="d-flex justify-content-center btn btn-block btn-sm <?= $tema['kemajuan'] != "100" ? "btn-danger" : "btn-primary";?> btnDaftarIsi"><span><?= $tema['bab'] . ". " . $tema['title_arti']?></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
<script>
    $(".btnMulai").click(function(){
        $("#daftarIsiTitle").html("Materi Full Time 1")

        let html = `
            <li class="list list-group-item d-flex justify-content-between">1. Mufrodat Full Time 1 <span><a href="<?= base_url()?>ft_1/mufrodat" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
            <li class="list list-group-item d-flex justify-content-between">2. Qowaid Full Time 1 <span><a href="<?= base_url()?>ft_1/qowaid" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
        `;

        $(".listGroup").html(html)
    })

    $(".btnDaftarIsi").click(function(){
        let id = $(this).data("id");
        
        $.ajax({ 
            method: 'POST', 
            url: '<?= base_url()?>ft_1/get_tema', 
            data: { id: id }, 
            dataType: 'json',
            async: true,
            success: function (data) {
                $("#daftarIsiTitle").html(data.bab.title)
                html = "";

                data = data.tema
                data.forEach(function (data) {
                    if(data.kemajuan != 100){
                        html += `<li class="list-group-item d-flex justify-content-between" style="font-size: 20px">
                            <span><strong>`+data.title_arab+`</strong></span>
                            <span><a href="<?= base_url()?>ft_1/mufrodat?id=`+data.tema+`" class="btn btn-sm btn-danger"><i class="fa fa-book text-light mr-1"></i> `+Math.floor(data.kemajuan)+`%</a></span>
                        </li>`
                    } else {
                        html += `<li class="list-group-item d-flex justify-content-between" style="font-size: 20px">
                            <span><strong>`+data.title_arab+`</strong></span>
                            <span><a href="<?= base_url()?>ft_1/mufrodat?id=`+data.tema+`" class="btn btn-sm btn-info"><i class="fa fa-book text-light mr-1"></i> `+Math.floor(data.kemajuan)+`%</a></span>
                        </li>`
                    }
                }); 

                $(".listGroup").html(html)
            }
        });
    })
</script>