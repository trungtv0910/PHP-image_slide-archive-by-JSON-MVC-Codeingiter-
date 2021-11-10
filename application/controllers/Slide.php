<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	public function index()
	{

		//get data from database
	$data=	$this->slide_model->getDataDb();
	$data =json_decode($data,true);
	//trans data to view
	$data  = array('data' => $data );		
	$this->load->view('slide_view',$data);
	
	}
	public function slideAdd()
	{
		$this->load->view('slideAdd_view');
	}
	public function handleDataAdd()
	{
		 $title =$this->input->post('title');
		 $des =$this->input->post('des');
		 $btn_link =$this->input->post('btn_link');
		 $btn_text =$this->input->post('btn_text');
		 $image_slide =$_FILES['image_slide']['name'];


		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["image_slide"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["addSlide"])) {
		  $check =$_FILES["image_slide"]["tmp_name"];
		  if($check !== false) {
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check file size
		if ($_FILES["image_slide"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.<br>";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
		  $uploadOk = 0;
		}



		// check 
		 if($title =="" || $des == "" || $btn_link == "" || $btn_text== "" || $uploadOk == 0){
		 	echo "ERROR: field can't be empty ";
		 }else{
		 	if(move_uploaded_file($_FILES["image_slide"]["tmp_name"],$target_file )){
		 		$dataNew  = array('title' =>$title ,'des' => $des, 'btn_link'=>$btn_link ,'btn_text'=>$btn_text, 'image_slide'=> $image_slide);
		 		 // lấy về dữ liệu trong data
				 $data= $this->slide_model->getDataDb();
				 $data =json_decode($data,true);
				 if(empty($data)){
				 	$data=  array();
				 }
				 array_push($data,$dataNew);
				$data=json_encode($data);

				$this->slide_model->updateData($data);
				$this->load->view('successAdd_view');

		 	}else{
		 		echo 'ERROR: Upload exit';
		 	}
		 }

	}
	public function slideEdit()
	{
		//get data form database
		$data =	$this->slide_model->getDataDb();
		$data =json_decode($data,true);
		$data  = array('data' => $data );		
		$this->load->view('slideEdit_view',$data);
	}
	public function handleDataEdit()
	{
		 $title =$this->input->post('title');
		 $des =$this->input->post('des');
		 $btn_link =$this->input->post('btn_link');
		 $btn_text =$this->input->post('btn_text');
		 $image_slideNew=$_FILES['image_slide']['name'];
		 $image_slideOld=$this->input->post('image_slideOld');
		 
		$target_dir = "uploads/";	
	
		

		$uploadOk=1;
		 $dataImage=array();
		 for ($i=0; $i <count($image_slideOld) ; $i++) { 
		 		if(empty($image_slideNew[$i])){
		 			$dataImage[$i] =$image_slideOld[$i];

		 		}else
		 		{
		 			$dataImage[$i] =$image_slideNew[$i];
		 			$imageFileType = strtolower(pathinfo($dataImage[$i],PATHINFO_EXTENSION));
		 			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
					  $uploadOk = 0;
					}else{
					$path=$target_dir. $image_slideNew[$i];
		 			move_uploaded_file($_FILES["image_slide"]["tmp_name"][$i], $path);
		 			
					}
		 			
		 			
		 		}
		 }
		 if($uploadOk!=0){
			 	$data=array();
				 for($i=0;$i<count($title);$i++){
					
						$dataNew  = array('title' => $title[$i],'des'=> $des[$i],'btn_link'=> $btn_link[$i],'btn_text'=>$btn_text[$i],'image_slide'=>$dataImage[$i]);
							array_push($data,$dataNew);	
					
				 }
				 $data=json_encode($data);
				 if($this->slide_model->updateData($data)){
				 	$this->load->view('successEdit_view');
				 }else
				 {
				 	echo 'ERROR NOT EDIT';
				 }
			}else{
				echo 'ERROR NOT EDIT';
			}
	}
	public function deleteData($id)
	{
		// $this->slide_model->deleteData_once($id);
		// lây dữ liệu
		$data=$this->slide_model->getDataDb();
		$data = json_decode($data,true);
		$dataOld=array();
			for ($i=0; $i <count($data) ; $i++) { 
						$temp=$data[$i];
						$idMD5=md5($data[$i]['title']);

						if($id!=$idMD5){
						$dataNew = array('title' =>$temp['title'],'des'=> $temp['des'],'btn_link'=> $temp['btn_link'],'btn_text'=>$temp['btn_text'],'image_slide'=>$temp['image_slide'] );
							array_push($dataOld,$dataNew);
						}
			}
			$dataOld =json_encode($dataOld);
			if($this->slide_model->updateData($dataOld)){
				$this->load->view('successDelete_view');
			}else{
				echo 'ERROR';
			}
	}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */