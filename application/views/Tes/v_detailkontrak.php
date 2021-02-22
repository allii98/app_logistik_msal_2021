<div class="page-inner">
    <div class="page-header">
        <h3 class="page-title"><?= $tittle; ?></h3>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Home') ?>">Home</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('kontrak') ?>"><?= $tittle; ?></a>
            </li>
        </ul>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <?php foreach ($isi as $data) : ?>
                    <div class="card-header">
                        <h4 class="card-title">Detail Data</h4>
                    </div>
                    <form action="<?= base_url('Kontrak') ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nokontrak">No Kontrak*</label>
                                        <div class="col-12">
                                            <input type="hidden" class="form-control" name="id" id="id" value="<?= $data->id_kontrak ?>">
                                            <input type="text" class="form-control" name="no_kon" id="nokontrak" value="<?= $data->no_kontrak ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub">Sub No Kontrak*</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="sub" id="sub" value="<?= $data->sub_no_kontrak ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="relasi">Relasi*</label>
                                        <div class="col-12">
                                            <input type="number" class="form-control" name="relasi" id="relasi" value="<?= $data->realisasi ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pembeli">Penjual*</label>
                                        <div class="col-12">
                                            <select class="form-control" name="penjual" id="penjual" disabled>
                                                <!-- <option>-Pilih-</option> -->
                                                <?php foreach ($msal as $k) { ?>
                                                    <option <?php if ($k->id_pt == $k->id_pt) {
                                                                echo 'selected="selected"';
                                                            } ?> value="<?php echo $k->id_pt ?>"><?php echo $k->nama_pt ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="penjual">Pembeli*</label>
                                        <div class="col-12">
                                            <select class="form-control" name="pembeli" id="penjual" disabled>
                                                <!-- <option>-Pilih-</option> -->
                                                <?php foreach ($kontrak as $k) { ?>
                                                    <option <?php if ($k->id_mitra == $k->id_mitra) {
                                                                echo 'selected="selected"';
                                                            } ?> value="<?php echo $k->id_mitra ?>"><?php echo $k->nama_mitra ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="jb">Jenis Barang*</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="jb" name="jb" value="<?= $data->jenis_barang ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kuantitas">Kuantitas*</label>
                                        <div class="col-12">
                                            <input type="number" class="form-control" name="kuantitas" id="kuantitas" value="<?= $data->kuantitas ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="unit">Unit*</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="unit" id="unit" value="<?= $data->unit ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hs">Harga Satuan*</label>
                                        <div class="col-12">
                                            <input type="number" class="form-control" name="hrg_satuan" id="hs" value="<?= $data->hrg_satuan ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ppn">PPN*</label>
                                        <div class="col-12">
                                            <select class="form-control" name="ppn" id="ppn" disabled>
                                                <?php $ppn = $this->input->post('ppn') ? $this->input->post('ppn') : $data->ppn ?>
                                                <option value="Y">YES</option>
                                                <option value="N" <?= $ppn == 'N' ? 'selected' : null  ?>>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="tgl">Tanggal Penyerahan*</label>
                                        <div class="col-12">
                                            <input type="date" class="form-control" name="tgl" value="<?= date_format(date_create($data->waktu_tr), 'Y-m-d'); ?>" id="tgl" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="syarat">Syarat*</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="syarat" id="syarat" rows="3" disabled><?= $data->syarat ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pembayaran*</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="pembayaran" id="pembayaran" rows="3" disabled><?= $data->pembayaran ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="spek">Spesifikasi*</label>
                                        <div class="col-12">
                                            <textarea class="form-control" name="spek" id="spek" rows="3" disabled><?= $data->spek ?></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Kembali</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>