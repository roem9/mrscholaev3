
<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Modal title</h5>
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
                <?php 
                    foreach ($tema as $tema) :?>
                                <div class="col-12 col-md-4 mb-3">
                                <div class="card rounded-lg border-primary">
                                <div class="card-header list-group-item-primary d-flex justify-content-center">
                                    <span class="text-dark arab"><?= $tema['title']?><span>
                                </div>
                                <div class="card-body">
                                    <a href="#daftarIsi" data-id="<?= $tema['bab']?>" data-toggle="modal" class="d-flex justify-content-center btn btn-block btn-sm btn-primary btnDaftarIsi"><span><?= $tema['title_arti']?></span></a>
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
                    html += `<li class="list-group-item d-flex justify-content-between" style="font-size: 20px">
                        <span><strong>`+data.title_arab+`</strong></span>
                        <span><a href="<?= base_url()?>ft_1/mufrodat?id=`+data.tema+`" ><i class="fa fa-angle-right text-secondary"></i></a></span>
                    </li>`
                }); 

                $(".listGroup").html(html)
            }
        });
    })
</script>