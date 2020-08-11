<?php
    // function
    function anta($kata){
        return $kata;
    }
    
    function antuma($kata){
        $data = strlen($kata);
        $satu = substr($kata, 0, $data-2);
        $t1 = "َا";
        return $satu . $t1;
    }
    
    function antum($kata){
        $data = strlen($kata);
        $satu = substr($kata, 0, $data-2);
        $t1 = "ُوْا";
        return $satu . $t1;
    }

    function anti($kata){
        $data = strlen($kata);
        $satu = substr($kata, 0, $data-2);
        $t1 = "ِيْ";
        return $satu . $t1;
    }

    function antunna($kata){
        $data = strlen($kata);
        $satu = substr($kata, 0, $data-2);
        $t1 = "ْنَ";
        return $satu . $t1;
    }
// function

    if(isset($kata)){
        $option = [
            anta($kata),
            antuma($kata),
            antum($kata),
            anti($kata),
            antunna($kata)
        ];
    
        shuffle($option);
    }
?> 
        <div class="container" id="container-content">
        <?php if(isset($kata)):?>
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
                        <li class="list-group-item list-group-item-danger d-flex justify-content-between">Kata</li>
                        <li class="list-group-item"><?= $kata_dasar?></li>
                        <li class="list-group-item"><?= $arti?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end"><span>ضَمِيْرٌ مُخَاطَبٌ مُذَكَّرٌ</span></li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= anta($kata)?></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">أَنْتَ</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antuma($kata)?></td>
                                    <td class="text-center">ـَا</td>
                                    <td class="text-center">أَنْتُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antum($kata)?></td>
                                    <td class="text-center">ـُوْا</td>
                                    <td class="text-center">أَنْتُمْ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success d-flex justify-content-end"><span>ضَمِيْرٌ مُخَاطَبٌ مُؤَنَّثٌ</span></li>
                        <li class="list-group-item">
                            <table class="table table-sm" border=1>
                                <tr>
                                    <th class="text-center">Pola</th>
                                    <th class="text-center">Akhir</th>
                                    <th class="text-center">Dhomir</th>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= anti($kata)?></td>
                                    <td class="text-center">ـِيْ</td>
                                    <td class="text-center">أَنْتِ</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antuma($kata)?></td>
                                    <td class="text-center">ـَا</td>
                                    <td class="text-center">أَنْتُمَا</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><?= antunna($kata)?></td>
                                    <td class="text-center">ـْنَ</td>
                                    <td class="text-center">أَنْتُنَّ</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Latihan Fi'il Amr</li>
                        <li class="list-group-item d-flex justify-content-between">
                            <?php if($latihan):?>
                                <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-success">Latihan</a>
                                <span class="btn btn-sm"><i class="fa fa-check-circle text-success"></i></span>
                            <?php else:?>
                                <a href="#modalDhomir" data-toggle="modal" class="modalDhomir btn btn-sm btn-danger">Latihan</a>
                                <span class="btn btn-sm"><i class="fa fa-times-circle text-danger"></i></span>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <a href="<?= base_url()?>awwal/fiil/amr" class="btn btn-sm btn-success"><i class="fa fa-arrow-left"></i> kembali</a>
                </div>
            </div>
        <?php else:?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-3"></i> terjadi kesalahan kembali ke <a href="<?= base_url()?>fiil/mudhori" class="text-primary">menu utama</a></div>
                </div>
            </div>
        <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- kumpulan modal -->

    <!-- Modal Dhomir -->
        <div class="modal fade" id="modalDhomir" tabindex="-1" role="dialog" aria-labelledby="modalDhomirLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDhomirLabel"><?= $kata_dasar?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url()?>latihan/add_latihan" method="post" id="latihan">
                        <input type="hidden" name="latihan" value="<?= $latih?>">
                        <input type="hidden" name="materi" value="amr">
                        <input type="hidden" name="mustawa" value="awwal">
                        <input type="hidden" name="redirect" value="awwal/fiil/amr">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d12">أَنْتُنَّ</label>
                                </div>
                                <select name="d12" id="d12" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d7">أَنْتَ</label>
                                </div>
                                <select name="d7" id="d7" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d8">أَنْتُمَا</label>
                                </div>
                                <select name="d8" id="d8" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d9">أَنْتُمْ</label>
                                </div>
                                <select name="d9" id="d9" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d10">أَنْتِ</label>
                                </div>
                                <select name="d10" id="d10" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12 d-flex justify-content-end p-0">
                                    <label for="d11">أَنْتُمَا</label>
                                </div>
                                <select name="d11" id="d11" class="form-control form-control-lg">
                                    <option value="">Pilih Jawaban</option>
                                    <?php foreach ($option as $data) :?>
                                        <option value="<?= $data?>"><?= $data?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="cek-dhomir btn btn-sm btn-primary">Simpan Jawaban</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Modal Dhomir -->
    
<!-- kumpulan modal -->

<script>    
    // modal dhomir
        $(".cek-dhomir").click(function(){
            if($("#d7").val() == "<?= anta($kata)?>" && $("#d8").val() == "<?= antuma($kata)?>" && $("#d9").val() == "<?= antum($kata)?>" && $("#d10").val() == "<?= anti($kata)?>" && $("#d11").val() == "<?= antuma($kata)?>" && $("#d12").val() == "<?= antunna($kata)?>"){
                Swal.fire({
                    text: "!أَحْسَنْتَ",
                    icon: 'success',
                }).then((result) => {
                    if (result.value) {
                        $('#latihan').submit();
                    }
                })
            } else if($("#d7").val() == "" && $("#d8").val() == "" && $("#d9").val() == "" && $("#d10").val() == "" && $("#d11").val() == "" && $("#d12").val() == ""){
                Swal.fire({
                    icon: 'error',
                    text: 'soalnya dijawab dulu yaa'
                })
            } else {
                if($("#d7").val() != "<?= anta($kata)?>"){
                    $("#d7").val("")
                }
                if($("#d8").val() != "<?= antum($kata)?>"){
                    $("#d8").val("")
                }
                if($("#d9").val() != "<?= antum($kata)?>"){
                    $("#d9").val("")
                }
                if($("#d10").val() != "<?= anti($kata)?>"){
                    $("#d10").val("")
                }
                if($("#d11").val() != "<?= antuma($kata)?>"){
                    $("#d11").val("")
                }
                if($("#d12").val() != "<?= antunna($kata)?>"){
                    $("#d12").val("")
                }

                Swal.fire({
                    icon: 'error',
                    text: 'ada yang salah, coba lagi yaa'
                })
            }
        })
    // modal dhomir

    $("#font").change(function(){
        let font = $(this).val();
        $("#container-content").css("font-size", font)
    })
</script>
