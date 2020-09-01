        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a id="backHome" class="btn btn-sm btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>
                <div class="col-12 mb-1">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i>Terjemahkan kata berikut ini ke dalam bahasa Arab. Pilihlah jawaban kemudian tekan tombol <strong>simpan</strong></div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $urut = 0;
                    foreach ($mufrodat as $i => $kalimat) :
                    $urut++;?>
                    <div class="col-12 col-md-12 mb-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="<?=$i?>"><strong><?= $i+1?>. <?= $kalimat['arti']?></strong></label>
                                    <span class="icon-cek-<?= $i?>"></span>
                                    <input type="hidden" name="kunci<?=$i?>" value="<?= $kalimat['kata_arab']?>">
                                    <input type="hidden" name="j<?= $i?>" id="jawaban<?=$i?>">
                                    <div class="d-flex justify-content-between">
                                        <a id="btnEdit<?=$i?>" class="btn btn-sm btn-success text-light edit img-shadow" data-id="<?= $i?>" style="display: none">ubah</a>
                                        <h5 class="text-right" id="j<?=$i?>"></h5>
                                    </div>
        
                                    <div id="select<?=$i?>">
                                        <div class="container">
                                            <div class="row justify-content-between">
                                                <?php rsort($kata);?>
                                                <?php foreach ($kata as $k => $data) :?>
                                                    <!-- <div class="col"> -->
                                                        <div class="radio-toolbar radio-shadow mr-1">
                                                            <input type="radio" id="<?= $i.$k?>" name="<?= $i?>1" class="btn-primary" value="<?= $data?>">
                                                            <label for="<?= $i.$k?>"><center><b><?= $data?></b></center></label>
                                                        </div>
                                                    <!-- </div> -->
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                        <a class="btn btn-block btn-sm btn-info text-light cek img-shadow" data-id="<?= $i?>|1">simpan</a>
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="row">
                <form action="<?= base_url()?>materi/add_latihan" method="post" id="latihan">
                    <input type="hidden" name="materi" value="<?= $materi?>">
                    <input type="hidden" name="tema" value="<?= $tema?>">
                    <input type="hidden" name="table" value="latihan_hifdzi_1">
                    <input type="hidden" name="latihan" value="Latihan 1">
                    <input type="hidden" name="redirect" value="<?= $redirect?>">
                </form>
                <div class="col-12 col-md-12 mb-3">
                    <a id="simpanJawaban" data-id="<?= COUNT($mufrodat)?>" class="btn btn-block btn-primary text-light">Periksa</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $("#simpanJawaban").click(function(){
        let count = $(this).data("id");
        let benar = 1;
        let cek = "";
        for (let i = 0; i < count; i++) {
            cek = $("input[name='j"+i+"']").val();
            if(cek != 'betul'){
                benar = 0;
                $(".icon-cek-"+i).html(`<i class="fa fa-times-circle text-danger"></i>`);
            } else {
                $(".icon-cek-"+i).html(`<i class="fa fa-check-circle text-success"></i>`);
            }
        }

        if(benar == 0){
            Swal.fire({
                icon: 'error',
                title: 'oppss',
                text: 'ada jawaban yang kurang tepat'
            })
        } else {
            Swal.fire({
                text: "selamat! semua jawabanmu benar",
                icon: 'success',
                confirmButtonText: 'Simpan',
            }).then((result) => {
                if (result.value) {
                    $('#latihan').submit();
                }
            })
        }
    })

    $("#backHome").click(function(){
        Swal.fire({
            icon: 'question',
            text: 'pekerjaan Anda tidak akan tersimpan, yakin akan keluar?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: '<a href="<?= base_url($redirect)?>">Ya</a>',
            cancelButtonText: 'Tidak'
        })
    })

    $(".cek").click(function(){
        let data = $(this).data("id");
        data = data.split("|");
        let id = data[0];
        let total = data[1];

        let html = '';
        for (let i = 0; i < total; i++) {
            html += $("input[name='"+id+""+1+"']:checked").val();
        }

        if(html === 'undefined'){
            html = '-';
        }

        if(html == $("input[name='kunci"+id+"']").val()){
            $("#j"+id).html(html);
            $("#jawaban"+id).val("betul");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();
        } else {
            $("#j"+id).html(html);
            $("#jawaban"+id).val("salah");
            $("#select"+id).hide();
            $("#btnEdit"+id).show();
        }
    })

    $(".edit").click(function(){
        let id = $(this).data("id");
        
        $("#btnEdit"+id).hide();
        $("#j"+id).html("");
        $("#jawaban"+id).val("");
        $("#select"+id).show();
    });
</script>