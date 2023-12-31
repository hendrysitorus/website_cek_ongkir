<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
	{
		public function index()
		{
			// menampilkan kota dari API RajaOngkir 
			$curl = curl_init();
			curl_setopt_array($curl, 
			array(
					CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET",
					CURLOPT_HTTPHEADER => array(
						"key: 9c355332b359f23e42f3e3b4bc98b3ca"
					),
				)
			);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			// echo "cURL Error #:" . $err;
				$data['kota'] = array('error'=> true);
			} else {
			// echo $response;
			$data['kota'] = json_decode($response);
			}
			//  print_r($data['kota']);
			$this->load->view('home', $data);
		}


		// cek ongkir 
		function cekongkir()
		{
			$asal_kota = $this->input->post('asal');
			$tujuan_kota = $this->input->post('tujuan');
			$berat = $this->input->post('berat');
			$kurir = $this->input->post('kurir');
			$curl = curl_init();
		
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=".$asal_kota."&destination=".$tujuan_kota."&weight=".$berat."&courier=".$kurir,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: 9c355332b359f23e42f3e3b4bc98b3ca"
			),
			));
		
			$response = curl_exec($curl);
			$err = curl_error($curl);
		
			curl_close($curl);
		
			if ($err) {
				// echo "cURL Error #:" . $err;
				$data['hasil'] = array('error' => true);
			} else {
				// echo $response;
				$data['hasil'] = json_decode($response);

		}
		// print_r($data['hasil']);

		$this->load->view('hasil', $data);


		
	}
}
