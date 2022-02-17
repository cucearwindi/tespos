<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$sess_login		= $this->session->userdata('sess_login');
		if($sess_login != 1)
		{
			redirect('login');
		}
		
		$this->load->model('m_users');
		$this->load->model('m_master_data');
		// $this->load->model('m_file_type');
		// $this->load->model('m_attachment');
		// $this->load->model('m_log');
		// $this->load->model('m_user_assign');
		// $this->load->model('m_wo');
		// $this->load->model('m_wo_details');
		// $this->load->model('m_wo_detail_attributes');
		// $this->load->model('m_grouping_wo_details');
		// $this->load->model('m_wo_mapping');
		// $this->load->model('m_activity');
		// $this->load->model('m_wo_source');
		// $this->load->model('m_sub_program');
		// $this->load->model('m_sub_system');
		// $this->load->model('m_location');
		// $this->load->model('m_location_group');
		// $this->load->model('m_designators');
		// $this->load->model('m_wo_detail_designators');
		// $this->load->model('m_module_attribute_mapping');
		// $this->load->model('m_user_access_menu');
		// $this->load->model('m_program');
		// $this->load->model('m_system');
		// $this->load->model('m_location_region_telkom');
		// $this->load->model('m_sequence');
		// $this->load->model('m_tickets');
	}

	// config multiple upload
	public function create_dir_upload()
	{
		$path_source = './file_uploads/produk'; 
		if (!is_dir($path_source)) {
			mkdir($path_source, DIR_WRITE_MODE);
			chmod($path_source, DIR_WRITE_MODE);
		}

		$status = 'T';
		$path 	= $path_source;
		$link 	= base_url().'file_uploads/produk';

		$return_create_dir = array(
			'status' 	=> $status,
			'path'		=> $path,
			'link'		=> $link
		);
		return json_encode($return_create_dir);
	}

	public function master_produk()
	{
		$user_id 				= $this->session->userdata('sess_user_id');
		$sess_loc_group_id 		= $this->session->userdata('sess_loc_group_id');
		$data['notif_message'] 	= $this->session->flashdata('message');
		/* select data */
		$data['data_kategori'] 	= $this->m_master_data->select_kategori();
		$data['data_produk'] 	= $this->m_master_data->select_produk();
		/* select data */

		$data['content'] = 'contents/tables/v_produk';
		$this->load->view('layouts/v_layout', $data);
	}

	public function act_create_produk()
	{
		$sess_user_name = $this->session->userdata('sess_user_name');
		$data['notif_message'] 	= $this->session->flashdata('message');
		/* post data */
		$nama_produk	= $this->input->post('nama_produk', TRUE);
		$detail_produk	= $this->input->post('detail_produk', TRUE);
		$harga			= $this->input->post('harga', TRUE);
		$id_kategori	= $this->input->post('id_kategori', TRUE);
		/* post data */

		// echo $nama_produk."<br>";
		// echo $detail_produk."<br>";
		// echo $harga."<br>";
		// echo $id_kategori."<br>";

		$where	= "nama_produk = '".$nama_produk."'";
		$cek_duplikat_produk 	= $this->m_master_data->select_produk_where($where);
		if (count($cek_duplikat_produk) == 0) {
			/* UPLOAD FILE */
			$create_dir 		= $this->create_dir_upload();
			$create_dir_decode 	= json_decode($create_dir, true);
			// print_r($create_dir_decode);
			// exit();

			// file upload condition
			if (isset($_FILES['files_upload'])) {
				$file_conf 		= $_FILES['files_upload'];
				$file_count 	= count($file_conf["name"]);

				$file_name 		= '';
				$path 			= '';
				$link 			= '';

				if ($file_count == 1) {
					$error 	= $file_conf["error"];
					if ($error == '4') {  // error 4 is for "no file selected"
						echo "no file selected";
					} else {
						$name 			= $file_conf["name"][0];
						$temporary_file = $file_conf["tmp_name"][0];
						$type 			= $file_conf["type"][0];
						$size 			= $file_conf["size"][0];

						$file_name_new 	= str_replace(' ', '_', $name);
						$target_path 	= $create_dir_decode['path'].'/'.$file_name_new;
						if (move_uploaded_file($temporary_file, $target_path)) {
							$file_name 	= $file_name_new;
							$path 		= $target_path;
							$link 		= $create_dir_decode['link'].'/'.$file_name_new;
						} else {

						}
					}

					/* START TRANSACTION */
					$this->db->trans_start();
					$this->db->trans_strict(FALSE);

						$data_produk = array(
							'id_kategori'	=> $id_kategori,
							'nama_produk' 	=> $nama_produk,
							'detail_produk' => $detail_produk,
							'harga'			=> $harga,
							'url_gambar'	=> $link,
							'path'			=> $path
						);
						$this->m_master_data->insert_t_produk($data_produk);

						$where	= "nama_produk = '".$nama_produk."'";
						$data_produk_select 	= $this->m_master_data->select_produk_where_row($where);
						$id_produk = $data_produk_select->id_produk;

						$data_log = array(
							'aktivitas'		=> 'Create Produk',
							'id_produk' 	=> $id_produk,
							'user_eksekusi' => $sess_user_name
						);
						$this->m_master_data->insert_t_log($data_log);

						// echo "<pre>";
						// print_r($data_produk);
						// print_r($data_produk_select);
						// print_r($id_produk);
						// print_r($data_log);
						// echo "</pre>";
						// exit();

					$trans_status = $this->db->trans_status();
					if($trans_status === FALSE) {
						$this->db->trans_rollback();
						$message = "toastr.error('invalid created produk', 'Error!');";
					}else{
						$this->db->trans_commit();
						$message = "toastr.success('success created produk', 'Success!');";
					}
					$this->db->trans_complete();
					/* END TRANSACTION */
				} else {
					$message = "toastr.error('invalid upload file', 'Error!');";
					$this->session->set_flashdata('message', $message);
					redirect('data_master/master_produk');
				}
			}
		} else {
			$message = "toastr.error('Produk sudah ada', 'Error!');";
			$this->session->set_flashdata('message', $message);
			redirect('data_master/master_produk');
		}

		$this->session->set_flashdata('message', $message);
		redirect('data_master/master_produk');
	}

	public function master_kategori_produk()
	{
		$user_id 				= $this->session->userdata('sess_user_id');
		$sess_loc_group_id 		= $this->session->userdata('sess_loc_group_id');
		$data['notif_message'] 	= $this->session->flashdata('message');
		/* select data */
		$data['data_kategori'] 	= $this->m_master_data->select_kategori();
		/* select data */

		$data['content'] = 'contents/tables/v_kategori_produk';
		$this->load->view('layouts/v_layout', $data);
	}

	public function act_kategori_produk($aksi, $id)
	{
		$sess_user_name = $this->session->userdata('sess_user_name');
		$data['notif_message'] 	= $this->session->flashdata('message');

		if ($aksi == 'create') {
			/* post data */
			$nama_kategori	= $this->input->post('nama_kategori', TRUE);
			/* post data */

			$where	= "nama_kategori = '".$nama_kategori."'";
			$cek_duplikat_kategori 	= $this->m_master_data->select_kategori_where($where);

			if (count($cek_duplikat_kategori) == 0) {
				/* START TRANSACTION */
				$this->db->trans_start();
				$this->db->trans_strict(FALSE);

					$data_kategori = array(
						'nama_kategori' 	=> $nama_kategori
					);
					$this->m_master_data->insert_t_kategori($data_kategori);

					$data_log = array(
						'aktivitas'		=> 'Create Kategori Produk',
						'id_produk' 	=> NULL,
						'user_eksekusi' => $sess_user_name
					);
					$this->m_master_data->insert_t_log($data_log);

				$trans_status = $this->db->trans_status();
				if($trans_status === FALSE) {
					$this->db->trans_rollback();
					$message = "toastr.error('invalid created kategori produk', 'Error!');";
				}else{
					$this->db->trans_commit();
					$message = "toastr.success('success created kategori produk', 'Success!');";
				}
				$this->db->trans_complete();
				/* END TRANSACTION */
			} else {
				$message = "toastr.error('Kategori Produk sudah ada', 'Error!');";
				$this->session->set_flashdata('message', $message);
				redirect('data_master/master_kategori_produk');
			}
		} elseif ($aksi == 'detail_update') {
			$id = $this->input->post('id', TRUE);
			$where	= "id_kategori = ".$id."";
        	$detail_kategori = $this->m_master_data->select_kategori_where($where);

        	// print_r($detail_kategori);

        	foreach ($detail_kategori as $row)
			{
				echo json_encode(
					array(
					  "id_kategori"              =>$row->id_kategori,
					  "nama_kategori"            =>$row->nama_kategori,
					)
				);
			}
			exit();
		} elseif ($aksi == 'update') {
			$id_kategori 	= $this->input->post('id_kategori', TRUE);
			$nama_kategori 	= $this->input->post('nama_kategori', TRUE);
			// echo $id_kategori."<br>".$nama_kategori;

			$where	= "nama_kategori = '".$nama_kategori."'";
			$cek_duplikat_kategori 	= $this->m_master_data->select_kategori_where($where);

			if (count($cek_duplikat_kategori) == 0) {
				/* START TRANSACTION */
				$this->db->trans_start();
				$this->db->trans_strict(FALSE);

					$data_kategori = array(
						'nama_kategori' 	=> $nama_kategori
					);

					$where	= "id_kategori = '".$id_kategori."'";
					$this->m_master_data->update_t_kategori($where, $data_kategori);

					$data_log = array(
						'aktivitas'		=> 'Update Kategori Produk',
						'id_produk' 	=> NULL,
						'user_eksekusi' => $sess_user_name
					);
					$this->m_master_data->insert_t_log($data_log);

				$trans_status = $this->db->trans_status();
				if($trans_status === FALSE) {
					$this->db->trans_rollback();
					$message = "toastr.error('invalid update kategori produk', 'Error!');";
				}else{
					$this->db->trans_commit();
					$message = "toastr.success('success update kategori produk', 'Success!');";
				}
				$this->db->trans_complete();
				/* END TRANSACTION */
			} else {
				$message = "toastr.error('Kategori Produk sudah ada', 'Error!');";
				$this->session->set_flashdata('message', $message);
				redirect('data_master/master_kategori_produk');
			}
		} elseif ($aksi == 'delete') {
			// cek apakah data ada di tabel produk 
			$where	= "id_kategori = ".$id;
			$cek_kategori 	= $this->m_master_data->select_produk_where($where);

			//validasi
			if (count($cek_kategori) == 0) {
				/* START TRANSACTION */
				$this->db->trans_start();
				$this->db->trans_strict(FALSE);

					$where	= "id_kategori = '".$id."'";
					$this->m_master_data->delete_t_kategori($where);

					$data_log = array(
						'aktivitas'		=> 'Delete Kategori Produk',
						'id_produk' 	=> NULL,
						'user_eksekusi' => $sess_user_name
					);
					$this->m_master_data->insert_t_log($data_log);

				$trans_status = $this->db->trans_status();
				if($trans_status === FALSE) {
					$this->db->trans_rollback();
					$message = "toastr.error('invalid delete kategori produk', 'Error!');";
				}else{
					$this->db->trans_commit();
					$message = "toastr.success('success delete kategori produk', 'Success!');";
				}
				$this->db->trans_complete();
				/* END TRANSACTION */
			} else {
				$message = "toastr.error('Data tidak dapat di hapus, karena sudah berelasi dengan tabel produk', 'Error!');";
				$this->session->set_flashdata('message', $message);
				redirect('data_master/master_kategori_produk');
			}
		} else {
			echo "tidak ada";exit();
		}
			

		$this->session->set_flashdata('message', $message);
		redirect('data_master/master_kategori_produk');
	}
}