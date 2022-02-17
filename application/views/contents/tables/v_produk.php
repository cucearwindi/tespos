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
                  <li class="breadcrumb-item active">Produk
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
			                <h4 class="card-title">Produk</h4>
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
		                                    <?php if ($this->session->userdata('sess_id_role') == 1) { ?>
		                                    	<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#bootstrap"><i class="ft-plus"></i>
			                                        Tambah
			                                    </button>
		                                    <?php } ?>
		                                    
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
		                                            <form method="post" name="form_tambah" action="<?php echo base_url().'index.php/data_master/act_create_produk'?>" enctype="multipart/form-data">
		                                            <div class="modal-body">
		                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
		                                                    <label for="penerima">Nama Produk</label>
		                                                    <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required>
		                                                </fieldset>
		                                                <br>
		                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
		                                                    <label for="perihal_surat">Detail Produk</label>
		                                                    <textarea class="form-control" name="detail_produk" rows="5" placeholder="Detail Produk" required></textarea>
		                                                </fieldset>
		                                                <br>
		                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
		                                                    <label for="penerima">Harga</label>
		                                                    <input type="number" class="form-control" name="harga" placeholder="Harga" required>
		                                                </fieldset>
		                                                <br>
		                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
		                                                    <label for="pengirim">Kategori</label>
		                                                    <select class="form-control" name="id_kategori" required>
		                                                        <option value="">Pilih Kategori</option>
		                                                        <?php foreach($data_kategori as $row_kategori){ ?>
		                                                        <option value="<?php echo $row_kategori->id_kategori; ?>"><?php echo $row_kategori->nama_kategori; ?></option>
		                                                        <?php } ?>
		                                                    </select>
		                                                </fieldset>
		                                                <br>
		                                                <fieldset class="form-group floating-label-form-group" style="margin-bottom: -0.5rem;">
		                                                    <label for="penerima">Upload Gambar</label>
		                                                    <input type="file" id="myFile" name="files_upload[]" class="form-control" multiple="multiple" required>
		                                                </fieldset>
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
			                    	<center>
			                    	<table border="1">
			                            <?php $kolom = 4; $i=1; foreach ($data_produk as $row_produk) { 
										    if(($i) % $kolom== 1) { ?>
										    <tr>
										    <?php }  ?>
										    <td align="center" width="300px">
										    	<img src="<?php echo $row_produk->url_gambar; ?>" width="100%" /><br>
										    	<h1><?php echo $row_produk->nama_produk; ?></h1><br>
										    	Rp <?php echo $row_produk->harga; ?><br><br>
										    	<?php echo $row_produk->detail_produk; ?><br><br>
										    	<button class="btn btn-info">Beli</button><br><br>
										    </td>
										    <?php // echo '<td align="center" width="300px"><img src="img/'.$data['gambar'].'" width="50%" /><br><b>'.$data['nama_buku'].'</b></td>';
										    if(($i) % $kolom== 0) {  ?>  
										    </tr>   
										    <?php }
										   $i++;  
			                    		} ?>
			                    	</table>
			                    	</center>
								</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
        </div>
      </div>
    </div>