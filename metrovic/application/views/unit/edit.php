<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bidang</a></li>
                <li class="breadcrumb-item active">Edit Bidang</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">

                <div class="card-body">

                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New User</a> &nbsp;

                    <a href="<?php echo base_url('admin/user/power') ?>" class="btn btn-info"><i class="fa fa-user-o"></i> &nbsp; Add User Power</a>
                <?php else: ?>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New User</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
					<?php echo form_open('unit/edit/'.$unit['id_unit'],array("class"=>"form-horizontal")); ?>

<div class="form-group">
	<label for="kode_bidang" class="col-md-4 control-label">Bidang</label>
	<div class="col-md-8">
		<select name="kode_bidang" class="form-control">
			<option value="">select bidang</option>
			<?php 
			foreach($all_bidang as $bidang)
			{
				$selected = ($bidang['id_bidang'] == $unit['kode_bidang']) ? ' selected="selected"' : "";

				echo '<option value="'.$bidang['id_bidang'].'" '.$selected.'>'.$bidang['kode_bidang'].'</option>';
			} 
			?>
		</select>
	</div>
</div>
<div class="form-group">
	<label for="kode_urusan" class="col-md-4 control-label">Kode Urusan</label>
	<div class="col-md-8">
		<input type="text" name="kode_urusan" value="<?php echo ($this->input->post('kode_urusan') ? $this->input->post('kode_urusan') : $unit['kode_urusan']); ?>" class="form-control" id="kode_urusan" />
	</div>
</div>
<div class="form-group">
	<label for="kode_unit" class="col-md-4 control-label">Kode Unit</label>
	<div class="col-md-8">
		<input type="text" name="kode_unit" value="<?php echo ($this->input->post('kode_unit') ? $this->input->post('kode_unit') : $unit['kode_unit']); ?>" class="form-control" id="kode_unit" />
	</div>
</div>
<div class="form-group">
	<label for="nama_unit" class="col-md-4 control-label">Nama Unit</label>
	<div class="col-md-8">
		<input type="text" name="nama_unit" value="<?php echo ($this->input->post('nama_unit') ? $this->input->post('nama_unit') : $unit['nama_unit']); ?>" class="form-control" id="nama_unit" />
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success">Save</button>
	</div>
</div>

<?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>