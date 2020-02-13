<?php echo form_open('ppk/edit/'.$ppk['id_ppk'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_ppk" class="col-md-4 control-label">Nama Ppk</label>
		<div class="col-md-8">
			<input type="text" name="nama_ppk" value="<?php echo ($this->input->post('nama_ppk') ? $this->input->post('nama_ppk') : $ppk['nama_ppk']); ?>" class="form-control" id="nama_ppk" />
		</div>
	</div>
	<div class="form-group">
		<label for="nip_ppk" class="col-md-4 control-label">Nip Ppk</label>
		<div class="col-md-8">
			<input type="text" name="nip_ppk" value="<?php echo ($this->input->post('nip_ppk') ? $this->input->post('nip_ppk') : $ppk['nip_ppk']); ?>" class="form-control" id="nip_ppk" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_satker_ppk" class="col-md-4 control-label">Id Satker Ppk</label>
		<div class="col-md-8">
			<input type="text" name="id_satker_ppk" value="<?php echo ($this->input->post('id_satker_ppk') ? $this->input->post('id_satker_ppk') : $ppk['id_satker_ppk']); ?>" class="form-control" id="id_satker_ppk" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>