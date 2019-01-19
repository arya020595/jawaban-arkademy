<?php 

function biodata($name, $address, $hobbies, $is_married, $highschool, $university, $skill) {
	 $biodata = ['nama' => $name, 'address' => $address, 'hobbies' => explode(",",$hobbies), 'is_married' => $is_married, 'school' => ['highschool'=> $highschool, 'university' => $university], 'skill' =>explode(",",$skill)];
	 echo json_encode($biodata);
}

// Cara penggunaan => biodata('ketik_nama_anda', 'ketik_alamat_anda', 'ketik_list_hobi_anda_pisahkan_dengan_koma', 'ketik_false/true', 'ketik_nama_sma_anda', 'ketik_universitas_anda', 'ketik_list_skill_anda_pisahkan_dengan_koma')


biodata('Arya Rifqi Pratama', 'Tengger Kandangan', 'menyanyi, menulis, mencoding', true, 'SMAN 10 Surabaya', 'Universitas Airlangga', 'PHP, CSS, HTML');


 ?>