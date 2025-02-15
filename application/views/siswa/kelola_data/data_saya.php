<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <strong>Kolom yang ditandai <span style="color: red;">* Merah</span>	 wajid diisi. Periksa Kembali data yang telah diisi sebelum dikirim</strong>
                    </div>
                </div>
			</div>
			
			<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_saya" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
				<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_periodik" role="tab" aria-controls="nav-contact" aria-selected="false">Data Periodik</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Data Prestasi</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pilihan Kompetensi Keahlian</a>
			</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-siswa" role="tabpanel" aria-labelledby="nav-home-tab">
					<!-- isi Content -->
					<div class="card">
					<div class="card-body">
						<h6>Data Siswa Calon Peserta Didik Baru</h6>
						<form action="#">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nama Siswa</label>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Nama Lengkap">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-3">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Pilih Jenis Kelamin...</option>
										<option>Laki - Laki</option>
										<option>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">NISN</label>
								<div class="col-sm-3">
								<input type="password" class="form-control" placeholder="Nisn">
								</div>
								<label for="inputPassword" class="col-sm-1 col-form-label ml-left">NIS</label>
								<div class="col-sm-3">
								<input type="password" class="form-control" placeholder="Nis">
								</div>
							</div>

							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nomor Seri Ijasah SMP</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Nomor Seri Ijasah SMP" value="DN -">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nomor Seri SHUN</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Nomor Seri SHUN" value="DN -">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">No. Ujian Nasional SMP/MTS</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="No. Ujian Nasional SMP/MTS">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nomor Induk Kependudukan (NIK)</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Nomor Induk Kependudukan (NIK)">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Tempat, Tgl Lahir</label>
								<div class="col-sm-3">
								<input type="password" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="col-sm-3">
								<input type="date" class="form-control" placeholder="Tgl Lahir">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Agama</label>
								<div class="col-sm-3">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Pilih Agama...</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Konghucu</option>
										<option>Protestan</option>
										<option>Budha</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Berkebutuhan Khusus">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Alamat Tempat Tinggal</label>
								<div class="col-sm-5">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Dusun / Kampung</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Dusun / Kampung">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">RT / RW</label>
								<div class="col-sm-3">
								<input type="text" class="form-control" placeholder="RT / RW">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Keluruhan / Desa</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Kelurahan / Desa">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Kecamatan</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Kecamatan">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Kabupaten / Kota">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Provinsi</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Provinsi">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Alat Transportasi</label>
								<div class="col-sm-3">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Alat Transportasi...</option>
										<option>Jalan Kaki</option>
										<option>Sepeda Motor</option>
										<option>Kendaraan Mobil</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Jenis Tinggal</label>
								<div class="col-sm-3">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Jenis Tinggal...</option>
										<option>Bersama Orang Tua</option>
										<option>Kost</option>
										<option>Bersama Saudara</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">No. Telpon Rumah</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="No. Telpon Rumah">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">No. HP</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="No. HP">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Apakah Sebagai Penerima KPS</label>
								<div class="col-sm-2">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Sebagai Penerima KPS...</option>
										<option>Ya</option>
										<option>Tidak</option>
									</select>
								</div>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="No. KPS/KIP">
								</div>
							</div><br>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label"></label>
								<div class="col-sm-9">
								<a href="#" class="btn btn-primary col-sm-4">SIMPAN</a>
								</div>
							</div>
						</form>
					</div>
					</div>

					<!-- akhir Content -->

			</div>
			</div>





        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->
