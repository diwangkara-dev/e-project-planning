<?php echo form_open('metode/edit/'.$metode['id_metode'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_metode" class="col-md-4 control-label">Nm Metode</label>
		<div class="col-md-8">
			<input type="text" name="nm_metode" value="<?php echo ($this->input->post('nm_metode') ? $this->input->post('nm_metode') : $metode['nm_metode']); ?>" class="form-control" id="nm_metode" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>