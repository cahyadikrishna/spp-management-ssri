<?php  

function cek_login_akses(){

	$getCI = get_instance();
	if(!$getCI->session->userdata('username')) {

		$getCI->session->set_flashdata('message', '<div align="center" class="alert alert-danger" role="alert"> Anda belum Login</div>');
		redirect('auth');
	} else {
		$level_id = $getCI->session->userdata('level_id');

		if($level_id == 2) {
        redirect('auth/erorr');
                   } else

        if($level_id == 3) {
        redirect('auth/erorr');
    			}
	}
}