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
                <a href="<?= base_url('Pt') ?>"><?= $tittle; ?></a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="page-title">Masukkan Data</h4>
                </div>
                <form action="<?= base_url('Kontrak/tambah_post') ?>" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="nokontrak">No Kontrak*</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="no_kon" id="nokontrak" placeholder="No Kontrak" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sub">Sub No Kontrak*</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="sub" id="sub" placeholder="Sub No Kontrak" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="relasi">Relasi*</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" name="relasi" id="relasi" placeholder="Relasi" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pembeli">Penjual*</label>
                                    <div class="col-12">
                                        <select class="form-control" name="penjual" id="penjual">
                                            <option>-Pilih-</option>
                                            <?php foreach ($msal->result_array() as $k) {
                                                $k_id = $k['id_pt'];
                                                $k_nama = $k['nama_pt'];
                                            ?>
                                                <option value="<?= $k_id; ?>"><?= $k_nama; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="penjual">Pembeli*</label>
                                    <div class="col-12">
                                        <select class="form-control" name="pembeli" id="penjual">
                                            <option>-Pilih-</option>
                                            <?php foreach ($kontrak->result_array() as $k) {
                                                $k_id = $k['id_mitra'];
                                                $k_nama = $k['nama_mitra'];

                                            ?>
                                                <option value="<?= $k_id; ?>"><?= $k_nama; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="jb">Jenis Barang*</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="jb" name="jb" placeholder="Jenis Barang" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kuantitas">Kuantitas*</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" name="kuantitas" id="kuantitas" placeholder="Kuantitas" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="unit">Unit*</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hs">Harga Satuan*</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" name="hrg_satuan" id="hs" placeholder="Harga Satuan" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ppn">PPN*</label>
                                    <div class="col-12">
                                        <select class="form-control" name="ppn" id="ppn">
                                            <option>-Pilih-</option>
                                            <option value="Y">YES</option>
                                            <option value="N">NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl">Tanggal Penyerahan*</label>
                                    <div class="col-12">
                                        <input type="date" class="form-control" name="tgl" id="tgl" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="syarat">Syarat*</label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="syarat" id="syarat" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pembayaran">Pembayaran*</label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="pembayaran" id="pembayaran" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="spek">Spesifikasi*</label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="spek" id="spek" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>