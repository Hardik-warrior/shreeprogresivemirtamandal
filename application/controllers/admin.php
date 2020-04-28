<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
    	parent::__construct();

    		$this->load->model('MUser');
    }

	public function index()
	{
			$this->load->view('admin_view/admin_login');
	}


    // login area

	public function adminLogin()
	{
			$login = $this->input->post();

			$AdminName = $login['Name'];
			$AdminPassword = $login['Password'];

			//print_r($AdminName);
			//print_r($AdminPassword);

			$this->load->model('MAdmin');

				$result = $this->MAdmin->login($AdminName, $AdminPassword);

					if(count($result)>0)
					{
						/// set session for admin's details..
						$this->session->set_userdata('Admin_Details',$result[0]);
						redirect(base_url('admin/adminHome'));
					}
					else
					{
						$this->session->set_flashdata('Admin_Ermsg','Admin Id and Password are Invalid!');
						$this->load->view('admin_view/admin_login');
					}

	}

	/// this is the controller function for the admin logout function ....
	public function adminLogout()
	{
		$this->session->unset_userdata('Admin_Details');
			
			redirect(base_url('admin/index'));
	}

	  // login area over



	public function adminHome()
	{
			$this->load->view('admin_view/admin_home');
	}


	public function adminRegister()
	{
		$this->load->library('form_validation');
		$this->load->view('admin_view/admin_register');
	}

	public function adminRegisterValidation()
	{
		// $this->load->view('admin_view/admin_register');
		// print_r('ha avigaya?');
		

			/// this is the form validation library of the codeigniter framework...
		/// this library is use to validate the form
		// $this->load->library('form_validation');

		/// set_rules is the function of the form_validation library which is use to set the validation rule....

		/// set_rules('field_name','statement to display','validation property');

		//$this->form_validation->set_rules('psphoto', 'psphoto', 'required');

		// $this->form_validation->set_rules('membername', 'membername', 'required');

		// $this->form_validation->set_rules('fathername', 'fathername', 'required');

		// $this->form_validation->set_rules('currentaddress', 'currentaddress', 'required');

		// $this->form_validation->set_rules('mobilenumber', 'mobilenumber', 'required|exact_length[10]|numeric');

		// $this->form_validation->set_rules('village', 'village', 'required');

		// $this->form_validation->set_rules('pinnumber', 'pinnumber', 'required|exact_length[6]|numeric');

		// $this->form_validation->set_rules('talukaname', 'talukaname', 'required');

		// $this->form_validation->set_rules('districtaname', 'districtaname', 'required');

		// $this->form_validation->set_rules('age', 'age', 'required');

		// $this->form_validation->set_rules('caste', 'caste', 'required');

		// $this->form_validation->set_rules('subcaste', 'subcaste', 'required');

		// $this->form_validation->set_rules('business', 'business', 'required');

		// $this->form_validation->set_rules('businessaddress', 'businessaddress', 'required');

		// $this->form_validation->set_rules('annualincome', 'annualincome', 'required');
		
		// $this->form_validation->set_rules('house', 'house', 'required');

	//$this->form_validation->set_rules('no', 'no', 'required');

		//$this->form_validation->set_rules('ACphoto', 'ACphoto', 'required');


		/// run() is the function of the codegnitor's form_validation library to run the validation...
		/// if the validation works then the run function return the true.(all the conditions of the validation are true)
		/// if there are mistakes in the validation then it returns the false. (any of the condition is not valid)
	// if ($this->form_validation->run()) 
	// {

			/// input->post() : is the method use to take the data from the form passed data using post method...
			
			// print_r($_FILES);

				// foreach ($_FILES as $file ) 
				// {
				// 	if($file = "psphoto"){

				// 		$config['upload_path'] = 'image/user_image/user_passportphoto/';
				//    	    $config['allowed_types'] = 'jpg|jpeg|png|';

				// 	}elseif ($file = "ACphoto"){

				// 		$config['upload_path'] = 'image/user_image/user_adharcard/';
				// 		$config['allowed_types'] = 'jpg|jpeg|png|';

				// 	}else{

				// 		print_r('phota sarkha nakho ne');
				// 	}

				// 	 $this->load->library('upload',$config);
					 	
				// 	$this->upload->do_upload('psphoto');
				// 	$this->upload->do_upload('ACphoto');
					
				// 		 $imageData = $this->upload->data();
    //   					 $acimageData = $this->upload->data();
						 
				// 		 $insert['psphoto'] = $imageData['file_name'];

				// 		 $insert['ACphoto'] = $acimageData['file_name'];	
						  	
				// }
		        $userDetails = $this->input->post();

		        $state = 0;
		        foreach($_FILES as $file){
		        	if($state == 0){
		        	$target_dir = 'shreeprogresivemitramandal/image/user_image/user_passportphoto/';
					$target_file = $target_dir . basename($_FILES["psphoto"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

					

					// Check if image file is a actual image or fake image
					// if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["psphoto"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					// }
					if ($uploadOk == 0) {
					    echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {

					    // give a name and direction to the image - i changed the name to test.jpg...
					    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/' . $target_dir.$file['name'];
					    echo "<br><br>";
					    echo $uploadfile;
					         echo "<br><br>";

					    if (move_uploaded_file($_FILES["psphoto"]["tmp_name"], $uploadfile)) {
					        echo "The file ". basename( $_FILES["psphoto"]["name"]). " has been uploaded.";
					    } else {
					        $this->session->ser_flashdata('fileUploadMsg', "Sorry, there was an error uploading your file." ) ;
							$this->load->view('admin_view/admin_register');

					    }
					}



						// $configuration['upload_path'] = 'image/user_image/user_passportphoto/';
				  //   	$configuration['allowed_types'] = 'jpg|jpeg|png|';

						//  $this->load->library('upload',$configuration);

				  //   	 if($this->upload->do_upload('psphoto')){

				  //   	 	 $imageData = $this->upload->data();

			   //               $insert['psphoto'] = $imageData['file_name'];

			   //               print_r($imageData);

				  //   	 }else{

				  //   	 		$error = array('error' => $this->upload->display_errors());
				  //   	 		print_r($error);
						// 		// $this->load->view('admin_view/admin_register',$error);

				  //   	 }

					}elseif($state == 1){
					$target_dir = 'shreeprogresivemitramandal/image/user_image/user_adharcard/';
					$target_file = $target_dir . basename($_FILES["ACphoto"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

					

					// Check if image file is a actual image or fake image
					// if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["ACphoto"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					// }
					if ($uploadOk == 0) {
					    echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {

					    // give a name and direction to the image - i changed the name to test.jpg...
					    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/' . $target_dir.$file['name'];
					    echo "<br><br>";
					    echo $uploadfile;
					         echo "<br><br>";

					    if (move_uploaded_file($_FILES["ACphoto"]["tmp_name"], $uploadfile)) {
					        echo "The file ". basename( $_FILES["ACphoto"]["name"]). " has been uploaded.";
					    } else {
					         $this->session->ser_flashdata('fileUploadMsg', "Sorry, there was an error uploading your file." ) ;
							$this->load->view('admin_view/admin_register');
					    }
					}




						// $config2['upload_path'] = 'image/user_image/user_adharcard/';
				  //   	$config2['allowed_types'] = 'jpg|jpeg|png|';

						// $this->load->library('upload',$config2);

				 	// 	if ( $this->upload->do_upload('ACphoto')) {

				 	// 		 $acimageData = $this->upload->data();

						// 	 $insert['ACphoto'] = $acimageData['file_name'];
				 			
				 	// 			print_r($acimageData);
				 	// 	} else {

				 	// 		    $error = array('error' => $this->upload->display_errors());
				 	// 		    print_r($error);
						// 		// $this->load->view('admin_view/admin_register',$error);
				 			
				 	// 	}
					}
					$state++;

		        }

					// if($_FILES['psphoto']){

					// 	$config['upload_path'] = 'image/user_image/user_passportphoto/';
				 //    	$config['allowed_types'] = 'jpg|jpeg|png|';

				 //    	 $this->load->library('upload',$config);

				 //    	 if($this->upload->do_upload('psphoto')){

				 //    	 	 $imageData = $this->upload->data();

			  //                $insert['psphoto'] = $imageData['file_name'];


				 //    	 }else{

				 //    	 		$error = array('error' => $this->upload->display_errors());
					// 			// $this->load->view('admin_view/admin_register',$error);

				 //    	 }


					// }else{

					// 	print_r('Try agein');

					// }

					// if ($_FILES['ACphoto']) {

					// 	$config['upload_path'] = 'image/user_image/user_adharcard/';
				 // 		$config['allowed_types'] = 'jpg|jpeg|png|';

				 // 		$this->load->library('upload',$config);

				 // 		if ( $this->upload->do_upload('ACphoto')) {

				 // 			 $acimageData = $this->upload->data();

					// 		 $insert['ACphoto'] = $acimageData['file_name'];
				 			
				 // 		} else {

				 // 			    $error = array('error' => $this->upload->display_errors());
					// 			// $this->load->view('admin_view/admin_register',$error);
				 			
				 // 		}
				 		
						
					// }else{
					// 	print_r('Try agein');
					// }

				
				

			// foreach ($_FILES as $file ) {
			// 	if($file = "psphoto"){

			// 			$config['upload_path'] = 'image/user_image/user_passportphoto/';
			//             $config['allowed_types'] = 'jpg|jpeg|png|';

			//             $this->load->library('upload',$config);
					
			// 			$this->upload->do_upload('psphoto');

			// 			 $imageData = $this->upload->data();
						 

			// 				$insert['psphoto'] = $imageData['file_name'];
			// 				//$this->db->insert('userdetails', $insert);
						

			// 		if($file = "ACphoto")
			// 		{

			// 			$config2['upload_path'] = 'image/user_image/user_adharcard/';
			// 	    	$config2['allowed_types'] = 'jpg|jpeg|png|';

			// 	    	$this->load->library('upload',$config2);
					
			// 		    $this->upload->do_upload('ACphoto');

   //    					 $acimageData = $this->upload->data();

						
			// 			$insert['ACphoto'] = $acimageData['file_name'];
			// 			//$this->db->insert('userdetails', $insert);
			// 		}
			// 		else
			// 		{

			// 			print_r('phota sarkha nakho ne');
			// 		}	
			// 	}
			// 	else
			// 	{
			// 		Print_r('phota sarkha nakho ne');
			// 	}		

			// }

			//$this->MUser->insertUserDetails($userDetails);
		
		        $insert['psphoto'] = $_FILES['psphoto']['name'];
		        $insert['ACphoto'] = $_FILES['ACphoto']['name'];
				$insert['membername'] = $userDetails['membername'];
				$insert['fathername'] = $userDetails['fathername'];
				$insert['currentaddress'] = $userDetails['currentaddress'];
				$insert['mobilenumber'] = $userDetails['mobilenumber'];
				$insert['village'] = $userDetails['village'];
				$insert['pinnumber'] = $userDetails['pinnumber'];
				$insert['talukaname'] = $userDetails['talukaname'];
				$insert['districtaname'] = $userDetails['districtaname'];
				$insert['age'] = $userDetails['age'];
				$insert['caste'] = $userDetails['caste'];
				$insert['subcaste'] = $userDetails['subcaste'];
				$insert['business'] = $userDetails['business'];
				$insert['businessaddress'] = $userDetails['businessaddress'];
				$insert['annualincome'] = $userDetails['annualincome'];
				$insert['house'] = $userDetails['house'];
			
				$this->db->insert('userdetails', $insert);
		//}
				redirect(base_url('admin/adminRegister'),'refresh');
	
	}

    



}

?>
