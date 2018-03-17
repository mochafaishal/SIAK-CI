<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

    public function transaksi_bank_penerimaan_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');

        $price=$this->input->post('price');
        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'harga' => $price[$i]
            );
        }
        $this->Post_model->create_batch('rincian_transaksi',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function insert_rekening_bank($param=NULL){
		if($param=='insert'){
			$post = $this->input->post();
            $nama = $post['nama'];
            $kode = $post['kode'];
            $pagu = $post['pagu'];

			if(!empty($post['nama'])){
				$this->load->model('Post_model');

				$data = array(
						'nama' => $nama,
						'kode' => $kode,
						'kredit' => $pagu
					);

				$this->Post_model->create('rekening_bank',$data);
				echo 'success';
			} else {
				echo 'Nama wajib diisi';
			}

		} else{
			echo 'Error';
		}
	}

     public function update_rekening_bank($param=NULL){
		if($param=='update'){
			$post = $this->input->post();
            $nama = $post['nama'];
            $kode = $post['kode'];
            $pagu = $post['pagu'];

			if(!empty($post['nama'])){
				$this->load->model('Post_model');

				$data = array(
						'nama' => $nama,
						'kode' => $kode,
						'kredit' => $pagu
					);

				$this->Post_model->update($post['id'],$data,'rekening_bank');
				echo 'success';
			} else {
				echo 'Nama wajib diisi';
			}

		} else{
			echo 'Error';
		}
	}

    public function delete_rekening($id=0){
		$this->load->model('Post_model');
		$this->Post_model->delete($id,'rekening_bank');
		redirect(base_url('rekening_bank'));
	}

  public function delete_transaksi_bank($id=0){
  $this->load->model('Post_model');
  $this->Post_model->delete($id,'transaksi_bank');
  redirect(base_url('transaksi_bank'));
}

public function delete_transaksi_kas($id=0){
$this->load->model('Post_model');
$this->Post_model->delete($id,'transaksi_kas');
redirect(base_url('transaksi_kas'));
}

public function delete_inter_account_transfers($id=0){
$this->load->model('Post_model');
$this->Post_model->delete($id,'inter_account_transfer');
redirect(base_url('inter_account_transfers'));
}



 public function insert_akun_kas($param=NULL){
 if($param=='insert'){
   $post = $this->input->post();
         $nama = $post['nama'];
         $kode = $post['kode'];


   if(!empty($post['nama'])){
     $this->load->model('Post_model');

     $data = array(
         'nama' => $nama,
         'kode' => $kode
     );

     $this->Post_model->create('akun_kas',$data);
     echo 'success';
   } else {
     echo 'Nama wajib diisi';
   }

 } else{
   echo 'Error';

   }
 }

 public function delete_akun_kas($id=0){
 $this->load->model('Post_model');
 $this->Post_model->delete($id,'akun_kas');
 redirect(base_url('akun_kas'));
 }

 public function update_akun_kas($param=NULL){
 if($param=='update'){
  $post = $this->input->post();
        $nama = $post['nama'];
        $kode = $post['kode'];

  if(!empty($post['nama'])){
    $this->load->model('Post_model');

    $data = array(
        'nama' => $nama,
        'kode' => $kode

      );

    echo 'success';
    $this->Post_model->update($post['id'],$data,'akun_kas');
  } else {
    echo 'Nama wajib diisi';
  }

 } else{
  echo 'Error';
 }
 }
}
