

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Home</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Keterangan</a></li>
                <li class="breadcrumb-item active">Daftar Keterangan</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Active User</small></h6>
                        <h4 class="m-t-0 text-info">10</h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Inctive User</small></h6>
                        <h4 class="m-t-0 text-primary">100</h4>
                    </div>
                </div>
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
					<table id="example23" id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id Keterangan</th>
									<th>Id Kegiatan</th>
									<th>Keterangan</th>
									<th>Rincian</th>
									<th>Jumlah</th>
									<th>Satuan</th>
									<th>Harga</th>
									<th>Total</th>
									<th>Actions</th>
									<th style="width:12%">Opsi </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
									<th>Id Keterangan</th>
									<th>Id Kegiatan</th>
									<th>Keterangan</th>
									<th>Rincian</th>
									<th>Jumlah</th>
									<th>Satuan</th>
									<th>Harga</th>
									<th>Total</th>
									<th>Actions</th>
									<th style="width:12%">Opsi </th>
                                </tr>
                            </tfoot>
							<tbody>
					<?php foreach($_keterangan as $u){ ?>
    <tr>
		<td><?php echo $_['id_keterangan']; ?></td>
		<td><?php echo $_['id_kegiatan']; ?></td>
		<td><?php echo $_['keterangan']; ?></td>
		<td><?php echo $_['rincian']; ?></td>
		<td><?php echo $_['jumlah']; ?></td>
		<td><?php echo $_['satuan']; ?></td>
		<td><?php echo $_['harga']; ?></td>
		<td><?php echo $_['total']; ?></td>
		<td>
            <a href="<?php echo site_url('_keterangan/edit/'.$_['id_keterangan']); ?>" class="btn btn-info btn-xs">Edit</a> 
        </td>
    </tr>
	<?php } ?>
							</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>