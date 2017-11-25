<?php
defined('BASEPATH') OR exit ('No Directory Script Access Allowed');

class admin extends CI_Controller
	{
		public function add_admin()
		{
			$file = '';

			if(!empty($_FILES["imgAdmin"]["type"]))
			{
				$file = $_FILES["imgAdmin"]["name"];
			}

			if(file_exists("Pictures/" . $_FILES["imgAdmin"]["name"]) && $file != "")
			{

				$suffix = 0;
				$name = pathinfo($_FILES['imgAdmin']['name'], PATHINFO_FILENAME);
				$extension = pathinfo($_FILES['imgAdmin']['name'], PATHINFO_EXTENSION);
				while(file_exists("imgAdmin/".$name.".".$extension))
				{
					$name .=$suffix;
					$suffix++;
				}
				$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
				$sourcePath = $_FILES['imgAdmin']['tmp_name'];
				$targetPath = "Pictures/".$basename; // Target path where file is to be stored

				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				$file = $basename;
			}
			else if($file != '')
			{
				$sourcePath = $_FILES['imgAdmin']['tmp_name'];
				$targetPath = "Pictures/".$_FILES["imgAdmin"]["name"]; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				$file = $_FILES["imgAdmin"]["name"];
			}

			$this->save_data_model->InsertAdmin($_POST, $file);
			exit;
		}
	}
?>