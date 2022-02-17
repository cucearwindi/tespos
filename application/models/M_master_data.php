<?php
class M_master_data extends CI_Model {
	public function __construct(){
		parent::__construct();
    	// $this->order_management=$this->load->database('order_management', TRUE);
	}

	public function select_produk()
    {
		$query=$this->db->query("
	    SELECT *
		FROM t_produk
		ORDER BY id_produk asc
    	");
		return $query->result();
    }

    public function select_produk_where($where)
    {
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('t_produk');
		return $query->result();
    }

    public function select_produk_where_row($where)
    {
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('t_produk');
		return $query->row();
    }

    public function select_kategori()
    {
		$query=$this->db->query("
	    SELECT *
		FROM t_kategori_produk
    	");
		return $query->result();
    }

    public function select_kategori_where($where)
    {
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('t_kategori_produk');
		return $query->result();
    }

    public function select_kategori_where_row($where)
    {
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('t_kategori_produk');
		return $query->row();
    }

    public function insert_t_produk($data)
    {
		$this->db->insert('t_produk',$data);
    }

    public function insert_t_kategori($data)
    {
		$this->db->insert('t_kategori_produk',$data);
    }
    
    public function delete_t_kategori($where)
    {
		$this->db->where($where);
		$this->db->delete('t_kategori_produk');
	}

	public function update_t_kategori($where, $data)
	{
		$this->db->where($where);
		$this->db->update('t_kategori_produk', $data);
	}

	public function insert_t_log($data)
    {
		$this->db->insert('t_log',$data);
    }
	
}