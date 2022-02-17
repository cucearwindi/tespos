	<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Majoo Teknologi Indonesia</h3>  
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1"><br><br><br>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">Home
                  </li>
                  <li class="breadcrumb-item active">Kategori Produk
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
        	<section class="row">
			    <div class="col-sm-12">
			        <div id="with-header" class="card">
			            <div class="card-header">
			                <h4 class="card-title">Kategori Produk</h4>
			                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			                <div class="heading-elements">
			                    <ul class="list-inline mb-0">
			                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
			                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
			                        <li><a data-action="close"><i class="ft-x"></i></a></li>
			                    </ul>
			                </div>
			            </div>
			            <div class="card-content collapse show">
			                <div class="card-body border-top-blue-grey border-top-lighten-5 ">
			                    <!--<h4 class="card-title">Content title</h4>-->
			                    <div class="col-lg-4 col-md-6 col-sm-12">
		                                <div class="form-group">
		                                    <!-- Button trigger modal -->
		                                    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#bootstrap"><i class="ft-plus"></i>
		                                        Tambah
		                                    </button>

		                                    <!-- Modal -->
		                                    <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
		                                        <div class="modal-dialog" role="document">
		                                        <div class="modal-content">
		                                            <div class="modal-header">
		                                            <h3 class="modal-title" id="myModalLabel35"> Tambah Data</h3>
		                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                                <span aria-hidden="true">&times;</span>
		                                            </button>
		                                            </div>
		                                            <form method="post" name="form_tambah" action="<?php echo base_url().'index.php/data_master/act_kategori_produk/create'?>" enctype="multipart/form-data">
			                                            <div class="modal-body">
			                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
			                                                    <label for="penerima">Nama Kategori Produk</label>
			                                                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori Produk" required>
			                                                </fieldset>
			                                                <br>
			                                                <br>
			                                                <!-- <br>
			                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
			                                                    <label for="id_users">Pembuat</label> -->
			                                                    <input type="hidden" class="form-control" name="id_users" value="<?php echo $this->session->userdata('sess_user_id'); ?>" readonly>
			                                                <!-- </fieldset> -->
			                                            </div>
			                                            <div class="modal-footer">
			                                                <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Batal">
			                                                <input type="submit" class="btn btn-primary " value="Create">
			                                                
			                                            </div>
		                                            </form>
		                                        </div>
		                                        </div>
		                                    </div>
		                                </div>
		                        </div>
			                    <div class="table-responsive">
			                    	<table class="table table-striped table-bordered default-ordering">
			                            <thead>
			                                <tr>
			                                    <th style="background-color: #F0F8FF;">No</th>
			                                    <th style="background-color: #F0F8FF;">Nama Kategori Produk</th>
			                                    <th style="background-color: #F0F8FF;">Action</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                <?php $idx=1; foreach ($data_kategori as $row_kategori) { ?>
												<tr>
													<td scope="row"><?php echo $idx; ?></td>
													<td><?php echo $row_kategori->nama_kategori; ?></td>
													<td>
														<!-- <form action="<?php echo base_url(); ?>index.php/data_master/act_kategori_produk/update/<?php echo $row_kategori->id_kategori; ?>" method="post">
															<button type="submit" class="btn btn-primary ft-edit"></button>
														</form> -->

														<!-- <a href="<?php echo base_url(); ?>index.php/data_master/act_kategori_produk/update/<?php echo $row_kategori->id_kategori; ?>">
															<button type="button" class="btn btn-primary mr-1 mb-1 btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data Kategori"><i class="ft-edit"></i> </button>
														</a> -->

														<!-- <a href="<?php echo base_url(); ?>index.php/data_master/act_kategori_produk/detail_update/<?php echo $row_kategori->id_kategori; ?>"> -->
														<!-- <input type="text" name="id_kategori" id="id_kategori" value="<?php echo $row_kategori->id_kategori; ?>" required> -->

														<button type="button" class="btn btn-primary mr-1 mb-1 btn-sm" data-toggle="modal" data-target="#bootstrap1" onclick="update(<?php echo $row_kategori->id_kategori; ?>)">
					                                        <i class="ft-edit"></i>
					                                    </button>
														<!-- </a> -->

					                                    <div class="modal fade text-left" id="bootstrap1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
					                                        <div class="modal-dialog" role="document">
					                                        <div class="modal-content">
					                                            <div class="modal-header">
					                                            <h3 class="modal-title" id="myModalLabel35"> Edit Data</h3>
					                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                                                <span aria-hidden="true">&times;</span>
					                                            </button>
					                                            </div>
					                                            <form method="post" action="<?php echo base_url().'index.php/data_master/act_kategori_produk/update/-'; ?>">
						                                            <div class="modal-body">
						                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
						                                                    <label for="nama_kategori">Nama Kategori Produk</label>
						                                                    <input type="hidden" class="form-control" id="id_kategori" name="id_kategori" value="" readonly>
						                                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="">
						                                                </fieldset>
						                                                <br>
						                                            </div>
						                                            <div class="modal-footer">
						                                                <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Batal">
						                                                <input type="submit" class="btn btn-primary " value="Update">
						                                            </div>
					                                            </form>
					                                        </div>
					                                        </div>
					                                    </div>

														<a href="<?php echo base_url(); ?>index.php/data_master/act_kategori_produk/delete/<?php echo $row_kategori->id_kategori; ?>" onclick="return confirm('Are you sure for delete?')">
															<button type="button" class="btn btn-danger mr-1 mb-1 btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete Data Kategori"><i class="ft-trash"></i> </button>
														</a>	
													</td>
												</tr>
											<?php $idx++;} ?>

	<script type="text/javascript">
	    function update(id_kategori){
        	console.log(id_kategori);
	        $.ajax({
	                  type : "POST",
	                  url  : "<?php echo base_url();?>index.php/data_master/act_kategori_produk/detail_update/-",
	                  data : 'id='+id_kategori,
        				

	                  success: function(data){
	                  	// console.log(data);
	                    obj = JSON.parse(data);

	                    var id_kategori                = obj.id_kategori;
	                    var nama_kategori              = obj.nama_kategori;
	                    // console.log(id_kategori);
	                    // console.log(nama_kategori);

	                    document.getElementById("id_kategori").value     = id_kategori;
	                    document.getElementById("nama_kategori").value        = nama_kategori;
	                    $("#bootstrap1").modal("show");
	                  }
	              });
	    }
	</script>
			                            </tbody>
			                        </table>
								</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
        </div>
      </div>
    </div>

   