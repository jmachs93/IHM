<?php


	class carrito extends CI_Model{
		var $idproducto;
		var $cantidad;
		var $usuario;
		function __construct(){
			parent::__construct();
		}

		function insertar($data){
			$this->idproducto = $data['producto'];
			$this->cantidad = $data['cantidad'];
			$this->usuario = $this->session->userdata['email'];

			$query = $this->db->get_where('producto', array('codigo' => $data['producto']));
			$row = $query->row();

			if($row->cantidad < $this->cantidad){
				redirect('principal/error');
			}
			else{
				$this->db->insert('personaproducto', $this); 
				
				$up = array(              
               		'cantidad' => $row->cantidad - $this->cantidad
            	);

				$this->db->where('codigo', $data['producto']);
				$this->db->update('producto',$up ); 
			}

		
		}

		
	}