<?php echo form_open('_keterangan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_kegiatan" class="col-md-4 control-label"> Kegiatan</label>
		<div class="col-md-8">
			<select name="id_kegiatan" class="form-control">
				<option value="">select _kegiatan</option>
				<?php 
				foreach($all__kegiatan as $_kegiatan)
				{
					$selected = ($_kegiatan['id_kegiatan'] == $this->input->post('id_kegiatan')) ? ' selected="selected"' : "";

					echo '<option value="'.$_kegiatan['id_kegiatan'].'" '.$selected.'>'.$_kegiatan['id_kegiatan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
		</div>
	</div>
	<div class="form-group">
		<label for="rincian" class="col-md-4 control-label">Rincian</label>
		<div class="col-md-8">
			<input type="text" name="rincian" value="<?php echo $this->input->post('rincian'); ?>" class="form-control" id="rincian" />
		</div>
	</div>
	<div class="form-group">
		<label for="jumlah" class="col-md-4 control-label">Jumlah</label>
		<div class="col-md-8">
			<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
		</div>
	</div>
	<div class="form-group">
		<label for="satuan" class="col-md-4 control-label">Satuan</label>
		<div class="col-md-8">
			<input type="text" name="satuan" value="<?php echo $this->input->post('satuan'); ?>" class="form-control" id="satuan" />
		</div>
	</div>
	<div class="form-group">
		<label for="harga" class="col-md-4 control-label">Harga</label>
		<div class="col-md-8">
			<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
		</div>
	</div>
	<div class="form-group">
		<label for="total" class="col-md-4 control-label">Total</label>
		<div class="col-md-8">
			<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>