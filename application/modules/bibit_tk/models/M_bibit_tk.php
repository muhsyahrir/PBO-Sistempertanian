<?php
class M_bibit_tk extends CI_Model {

    public function __construct(){
        parent::__construct();
        
    }
	
	//Tambah Keranjang
	public function find($id){
		$result = $this->db->where('id', $id)->limit(1)->get('barang');
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	//End

	public function get_where($id){
		return $this->db->get_where('barang',array('id'=>$id ));
	}
	
	

}