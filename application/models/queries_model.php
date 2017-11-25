<?php
	class queries_model extends CI_Model{

		public function getApplicants(){
			$this->db->select("app_first_name,app_middle_name,app_last_name,app_uploaded_img,app_date_created");
  			$this->db->from('tbl_applicant_form');  			
  			$query = $this->db->get();
  			return $query->result();
 			}

 		public function getMember(){
			$this->db->select("mem_first_name,mem_middle_name,mem_last_name,mem_uploaded_img,mem_date_created");
  			$this->db->from('tbl_member_file_form');  			
  			$query = $this->db->get();
  			return $query->result();
 			}

      public function getDisciplinary(){
      $this->db->select("dis_first_name,dis_middle_name,dis_last_name,dis_uploaded_img,dis_date_created");
        $this->db->from('tbl_disciplinary_record_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getBenefit(){
      $this->db->select("ben_first_name,ben_middle_name,ben_last_name,ben_uploaded_img,ben_date_created");
        $this->db->from('tbl_benefits_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getInvoice(){
      $this->db->select("inv_invoice_number,inv_soa_number,inv_client,inv_uploaded_img,inv_date_created");
        $this->db->from('tbl_invoices_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getDtr(){
      $this->db->select("dtr_first_name,dtr_middle_name,dtr_last_name,dtr_uploaded_img,dtr_date_created");
        $this->db->from('tbl_dtrs_only_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getLoan(){
      $this->db->select("loan_first_name,loan_middle_name,loan_last_name,loan_uploaded_img,loan_date_created");
        $this->db->from('tbl_loans_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getRequest(){
      $this->db->select("req_client_supplier,req_reference_number,req_check_voucher_number,req_uploaded_img,req_date_created");
        $this->db->from('tbl_request_for_payments_form');        
        $query = $this->db->get();
        return $query->result();
      }

       public function getClearance(){
      $this->db->select("cle_first_name,cle_middle_name,cle_last_name,cle_uploaded_img,cle_date_created");
        $this->db->from('tbl_clearance_waiver_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getQuit(){
      $this->db->select("qui_first_name,qui_middle_name,qui_last_name,qui_uploaded_img,qui_date_created");
        $this->db->from('tbl_quit_claim_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getLiquidation(){
      $this->db->select("liq_first_name,liq_middle_name,liq_last_name,liq_uploaded_img,liq_date_created");
        $this->db->from('tbl_liquidations_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getAnnual(){
      $this->db->select("ape_first_name,ape_middle_name,ape_last_name,ape_uploaded_img,ape_date_created");
        $this->db->from('tbl_annual_pe_form');        
        $query = $this->db->get();
        return $query->result();
      }

      public function getDocument(){
      $this->db->select("document,document_title,types_of_document,owner,doc_date_uploaded");
        $this->db->from('tbl_document');        
        $query = $this->db->get();
        return $query->result();
      }

		}
?>