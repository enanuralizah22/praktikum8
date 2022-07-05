	<div class="container">
		
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Form Tambah Data Karyawan
				</div>
				<div class="card-body"> 
					<form action="" method="post">
				<div class="form-group">
					<label for="nama">Nik</label>
					<input type="text" class="form-control" id="nik" name="txtnik">
					<small class="form-text text-danger"><?= form_error('txtnik'); ?></small>
				</div>
					<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="txtnama">
					<small class="form-text text-danger"><?= form_error('txtnama'); ?></small>
				</div>
					<div class="form-group">
					<label for="nama">Tanggal Lahir</label>
					<input type="date" class="form-control" id="tgl" name="txttgl">
					<small class="form-text text-danger"><?= form_error('txt'); ?></small>
				</div>
					<div class="form-group">
					<label for="nama">Jenis Kelamin</label>
				</br>
					<input type="radio" name="jekel" value="Laki-laki">Laki-Laki
					<input type="radio" name="jekel" value="Perempuan"> Perempuan
				</div>
					<div class="form-group">
					<label for="nama">Alamat</label>
				</br>
					<textarea name="txtalamat" cols="40" rows="3">
	   				</textarea>
	   				<small class="form-text text-danger"><?= form_error('txtalamat'); ?></small>
				</div>
					<div class="form-group">
					<label for="nama">Email</label>
					<input type="email" class="form-control" id="email" name="email">
					<small class="form-text text-danger"><?= form_error('email'); ?></small>
				</div>
					<div class="form-group">
					<label for="nama">No Tlp</label>
					<input type="text" class="form-control" id="notlp" name="txttlp">
				</div>
					<div class="form-group">
					<label for="nama">Jabatan</label>
					<select name="txtjabatan" class="form-control">
						<option value="">--Jabatan--</option>
					<?php foreach ($jabatan as $j ): ?>
						<option value="<?= $j['id_jabatan']; ?>"><?= $j['Nama_jabatan']; ?></option>
					<?php endforeach; ?>
					</select>
				</div>
					<div class="form-group">
					<label for="nama">Tanggal Gabung</label>
					<input type="date" class="form-control" id="tglmsk" name="txtmsk">
				</div>
				<button type="submit" name="tambah" class="btn btn-primary float-right"OnClick="return confirm('Apakah Data Akan Disimpan?');">Simpan</button>
			</form>
				</div>			
			</div>

		</div>
	</div>