<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Tipe Latihan</h5>
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
                    <div class="col-12 col-md-6">
                        <?= $this->session->flashdata('pesan');?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-2">
                    <a href="<?= base_url()?>ft_1/qowaid" class="btn btn-sm btn-success"><i class="fa fa-home mr-1"></i>Qowaid</a>
                </div>
                <!-- <div class="col-12">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i>Bahasa Arab memiliki pengelompokan Isim (Kata Benda) berdasarkan jenis, apakah untuk laki-laki (<strong>مُذَكَّرٌ</strong>) atau perempuan (<strong>مُؤَنَّثٌ</strong>)</div>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Ciri-ciri Kata Benda laki-laki (<strong>مُذَكَّرٌ</strong>)</li>
                        <li class="list-group-item">
                            <ol class="pl-3">
                                <li>Nama-nama yang digunakan oleh laki-laki :<br><span> <strong>نُوْحٌ</strong> ، <strong>يُوْسُفُ</strong> ، <strong>أَحْمَدُ</strong> ، <strong>زَيْدٌ</strong> ، <strong>أُسَامَةُ</strong> ، <strong>طَلْحَةُ</strong></span></li><br>
                                <li>Kata bahasa Arab yang tidak diakhiri Ta Marbuthoh (<span class="arab" style="font-size: 16px">ة</span>) : <br><span style="font-size: 16px"><strong>كِـتَابٌ</strong> , <strong>قَلَمٌ</strong> , <strong>مَكْتَبٌ</strong> , <strong>مَاءٌ</strong></span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Ciri-ciri Kata Benda Perempuan (<strong>مُؤَنَّثٌ</strong>)</li>
                        <li class="list-group-item">
                            <ol class="pl-3">
                                <li>Nama-nama yang digunakan oleh perempuan :<br><span> <strong>عَائِشَةُ</strong> ، <strong>خَدِيْجَةُ</strong> ، <strong>فَاطِمَةُ</strong> ، <strong>هِنْدٌ</strong> ، <strong>زَيْنَبُ</strong> ، <strong>مَرْيَمُ</strong></span></li><br>
                                <li>Kata bahasa Arab yang diakhiri Ta Marbuthoh (<span class="arab" style="font-size: 16px">ة</span>) : <br><span><strong>سَبُّوْرَةٌ</strong> , <strong>حَقِيْبَةٌ</strong> , <strong>مِسْطَرَةٌ</strong> , <strong>مِلْعَقَةٌ</strong></span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mb-3">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i><strong>Pengecualian</strong><br>Anggota tubuh yang berpasangan masuk kedalam kategori muannats. <strong>أُذُنٌ</strong> (telinga) ، <strong>عَيْنٌ</strong> (mata) ، <strong>يَدٌ</strong> (tangan) ، <strong>رِجْلٌ</strong> (kaki)</div>
                </div> -->
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan</li>
                        <li class="list-group-item"><a href="#daftarIsi" data-toggle="modal" data-id="<?= base_url()?>ft_1/qowaid?ln=<?= Md5('Mufrod & Mutsanna')?>&i=1" class="btn btn-sm btn-block btn-success btnMulai">Latihan 1</a></li>
                        <li class="list-group-item"><a href="#daftarIsi" data-toggle="modal" data-id="<?= base_url()?>ft_1/qowaid?ln=<?= Md5('Mufrod & Mutsanna')?>&i=2" class="btn btn-sm btn-block btn-success btnMulai">Latihan 2</a></li>
                        <li class="list-group-item"><a href="#daftarIsi" data-toggle="modal" data-id="<?= base_url()?>ft_1/qowaid?ln=<?= Md5('Mufrod & Mutsanna')?>&i=3" class="btn btn-sm btn-block btn-success btnMulai">Latihan 3</a></li>
                        <li class="list-group-item"><a href="#daftarIsi" data-toggle="modal" data-id="<?= base_url()?>ft_1/qowaid?ln=<?= Md5('Mufrod & Mutsanna')?>&i=4" class="btn btn-sm btn-block btn-success btnMulai">Latihan 4</a></li>
                        <li class="list-group-item"><a href="#daftarIsi" data-toggle="modal" data-id="<?= base_url()?>ft_1/qowaid?ln=<?= Md5('Mufrod & Mutsanna')?>&i=5" class="btn btn-sm btn-block btn-success btnMulai">Latihan 5</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>

<script>
    $(".btnMulai").click(function(){
        let link = $(this).data("id")
        $("#daftarIsiTitle").html($(this).html())
        let html = `
            <li class="list list-group-item d-flex justify-content-between">1. Pilihan Ganda <span><a href="`+link+`&j=1" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
            <li class="list list-group-item d-flex justify-content-between">2. Isian <span><a href="`+link+`&j=2" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
        `;

        $(".listGroup").html(html)
    })

    $("#font").change(function(){
        let font = $(this).val();
        $("[id='container-content']").css("font-size", font)
    })
</script>

