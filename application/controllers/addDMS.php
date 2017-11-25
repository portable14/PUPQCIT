<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addDMS extends CI_Controller {


	public function addApplicant()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Applicantform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Applicantform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Applicantform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertApplicant($_POST, $file);
		exit;
	}

	public function addMember()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Memberform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Memberform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Memberform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertMember($_POST, $file);
		exit;
	}

	public function addDisciplinary()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Disciplinaryform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Disciplinaryform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Disciplinaryform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertDisciplinary($_POST, $file);
		exit;
	}

	public function addBenefit()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Benefitform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Benefitform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Benefitform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertBenefit($_POST, $file);
		exit;
	}

	public function addInvoice()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Invoiceform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Invoiceform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Invoiceform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertInvoice($_POST, $file);
		exit;
	}

	public function addLoan()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Loanform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Loanform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Loanform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertLoan($_POST, $file);
		exit;
	}

	public function addRequest()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Requestform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Requestform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Requestform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertRequest($_POST, $file);
		exit;
	}

	public function addClearance()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Clearanceform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Clearanceform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Clearanceform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertClearance($_POST, $file);
		exit;
	}

	public function addQuit()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Quitform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Quitform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Quitform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertQuit($_POST, $file);
		exit;
	}

	public function addLiquidation()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Liquidationform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Liquidationform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Liquidationform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertLiquidation($_POST, $file);
		exit;
	}

	public function addAnnual()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Annualform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Annualform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Annualform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertAnnual($_POST, $file);
		exit;
	}

	public function addDocument()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Document/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Document/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Document/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertDocument($_POST, $file);
		exit;
	}

	public function addDtr()
	{
		$file = '';

		if(!empty($_FILES["imgInp"]["type"]))
		{
			$file = $_FILES["imgInp"]["name"];
		}

		if(file_exists("Files/Dtrform/" . $_FILES["imgInp"]["name"]) && $file != "")
		{

			$suffix = 0;
			$name = pathinfo($_FILES['imgInp']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['imgInp']['name'], PATHINFO_EXTENSION);
			while(file_exists("imgInp/".$name.".".$extension))
			{
				$name .=$suffix;
				$suffix++;
			}
			$basename = substr(md5(uniqid(rand())), 0, 11).".".$extension;
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Dtrform/".$basename; // Target path where file is to be stored

			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $basename;
		}
		else if($file != '')
		{
			$sourcePath = $_FILES['imgInp']['tmp_name'];
			$targetPath = "Files/Dtrform/".$_FILES["imgInp"]["name"]; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			$file = $_FILES["imgInp"]["name"];
		}

		$this->addDMS_model->InsertDtr($_POST, $file);
		exit;
	}

	
 

	
}
?>