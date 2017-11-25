-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 07:13 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmsfinal1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_annual_pe_form`
--

CREATE TABLE `tbl_annual_pe_form` (
  `ape_id` int(10) NOT NULL,
  `ape_uploaded_img` varchar(255) NOT NULL,
  `ape_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ape_first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ape_middle_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ape_last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ape_date_of_pe` date NOT NULL,
  `ape_laboratory` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ape_findings` varchar(500) CHARACTER SET utf8 NOT NULL,
  `ape_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_annual_pe_form`
--

INSERT INTO `tbl_annual_pe_form` (`ape_id`, `ape_uploaded_img`, `ape_id_number`, `ape_first_name`, `ape_middle_name`, `ape_last_name`, `ape_date_of_pe`, `ape_laboratory`, `ape_findings`, `ape_date_created`) VALUES
(6, 'class1.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', '2012-03-12', 'Urinalysis', 'sdfghjkl', '2017-10-28 04:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant_form`
--

CREATE TABLE `tbl_applicant_form` (
  `app_id` int(10) UNSIGNED NOT NULL,
  `app_uploaded_img` varchar(255) DEFAULT NULL,
  `app_first_name` varchar(50) NOT NULL,
  `app_middle_name` varchar(50) DEFAULT NULL,
  `app_last_name` varchar(50) NOT NULL,
  `app_birthdate` date NOT NULL,
  `app_age` varchar(255) NOT NULL,
  `app_gender` varchar(6) NOT NULL,
  `app_civil_status` varchar(50) NOT NULL,
  `app_religion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `app_height` varchar(10) NOT NULL,
  `app_pleasing_personality` varchar(10) NOT NULL,
  `app_course` varchar(100) DEFAULT NULL,
  `app_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `app_skills` varchar(300) NOT NULL,
  `app_contact_number` varchar(255) NOT NULL,
  `app_client_assigned` varchar(500) NOT NULL,
  `app_exam_status` varchar(50) NOT NULL,
  `app_work_experience` varchar(500) NOT NULL,
  `app_educational_attainment` varchar(500) NOT NULL,
  `app_referred_by` varchar(100) NOT NULL,
  `app_sourced_by` varchar(50) NOT NULL,
  `app_date_applied` date NOT NULL,
  `app_applicant_status` varchar(50) NOT NULL,
  `app_interview_remarks` varchar(500) NOT NULL,
  `app_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicant_form`
--

INSERT INTO `tbl_applicant_form` (`app_id`, `app_uploaded_img`, `app_first_name`, `app_middle_name`, `app_last_name`, `app_birthdate`, `app_age`, `app_gender`, `app_civil_status`, `app_religion`, `app_height`, `app_pleasing_personality`, `app_course`, `app_address`, `app_skills`, `app_contact_number`, `app_client_assigned`, `app_exam_status`, `app_work_experience`, `app_educational_attainment`, `app_referred_by`, `app_sourced_by`, `app_date_applied`, `app_applicant_status`, `app_interview_remarks`, `app_date_created`) VALUES
(15, 'Addadmin3.JPG', 'Jefferson', 'Obena', 'Azur', '1997-05-11', '20', 'male', 'single', 'Roman Catholic', '5''2"', 'Yes', 'BSIT', 'Quezon City', 'None', '0', '', 'Passed', 'None', 'College Level', 'Marck Sena', 'Walk-in', '2017-01-01', 'Accepted', 'Passed', '2017-10-25 11:58:59'),
(23, 'cb41f1ccd0d.png', 'marck', 'Cayetano', 'sena', '1997-01-01', '20', 'male', 'single', 'Roman Catholic', '5''2"', 'Yes', 'Bachelor of Science in Information Technolgy', 'Bulacan', 'Programming', '09071840673', 'Accounting Office', 'Passed', 'None', 'College Level', 'Jeff', 'Referral', '2017-01-01', 'Accepted', 'Competetive', '2017-10-28 09:22:02'),
(24, 'a5d2d60c320.png', 'Ruth', 'Catalan', 'Formoso', '1997-01-01', '20', 'female', 'married', 'Roman Catholic', '5''2"', 'Yes', 'Bachelor of Science in Information Technology', 'Bulacan', 'Programming', '09071840673', 'Accounting Office', 'Passed', 'None', 'College Level', 'Lester', 'Referral', '2017-01-01', 'Accepted', 'Competetive', '2017-10-28 09:29:29'),
(25, '1797231_180.jpg', 'Ruth', 'Catalan', 'Formoso', '1997-03-14', '20', 'female', 'single', 'Roman Catholic', '5''2"', 'Yes', 'BSIT', 'Bulacan', 'Programming', '091341351256', 'Head Office', 'Passed', 'None', 'College Graduate', 'Lester', 'Referral', '2017-09-19', 'Accepted', 'Good', '2017-10-28 11:45:32'),
(26, 'etap.gif', 'Marck', 'Caye', 'Se', '1998-02-10', '19', 'male', 'single', 'Roman Catholic', '5''6', 'Yes', 'BSIT', 'Bulacan', 'Programming', '0912036141', 'Accounting Office', 'Passed', 'None', 'College Graduate', 'Jeff', 'Job Fair', '2014-09-21', 'Accepted', 'Good', '2017-10-28 12:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benefits_form`
--

CREATE TABLE `tbl_benefits_form` (
  `ben_id` int(10) UNSIGNED NOT NULL,
  `ben_uploaded_img` varchar(255) NOT NULL,
  `ben_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ben_first_name` varchar(50) NOT NULL,
  `ben_middle_name` varchar(50) DEFAULT NULL,
  `ben_last_name` varchar(50) NOT NULL,
  `ben_sss_no` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ben_philhealth_no` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ben_pagibig_no` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ben_date_received` date NOT NULL,
  `ben_claim_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ben_death_claim` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ben_remarks` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ben_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_benefits_form`
--

INSERT INTO `tbl_benefits_form` (`ben_id`, `ben_uploaded_img`, `ben_id_number`, `ben_first_name`, `ben_middle_name`, `ben_last_name`, `ben_sss_no`, `ben_philhealth_no`, `ben_pagibig_no`, `ben_date_received`, `ben_claim_type`, `ben_death_claim`, `ben_remarks`, `ben_date_created`) VALUES
(4, 'Capture.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'AAA-GG-SSSS', '34567', '234567', '2012-03-12', 'Maternity', 'Natural', 'BSIT', '2017-10-28 04:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clearance_waiver_form`
--

CREATE TABLE `tbl_clearance_waiver_form` (
  `cle_id` int(10) UNSIGNED NOT NULL,
  `cle_uploaded_img` varchar(255) NOT NULL,
  `cle_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cle_first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cle_middle_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cle_last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cle_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cle_date_started` date NOT NULL,
  `cle_last_day_of_work` date NOT NULL,
  `cle_date_applied` date NOT NULL,
  `cle_date_received_from_member` date NOT NULL,
  `cle_date_received_from_mbs` date NOT NULL,
  `cle_date_processed_from_finance` date NOT NULL,
  `cle_date_transmitted_to_headoffice` date NOT NULL,
  `cle_other_deductions` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cle_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clearance_waiver_form`
--

INSERT INTO `tbl_clearance_waiver_form` (`cle_id`, `cle_uploaded_img`, `cle_id_number`, `cle_first_name`, `cle_middle_name`, `cle_last_name`, `cle_client`, `cle_date_started`, `cle_last_day_of_work`, `cle_date_applied`, `cle_date_received_from_member`, `cle_date_received_from_mbs`, `cle_date_processed_from_finance`, `cle_date_transmitted_to_headoffice`, `cle_other_deductions`, `cle_date_created`) VALUES
(4, 'class.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'Demelyn Monzon', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', 'sdfghjkl', '2017-10-28 04:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disciplinary_record_form`
--

CREATE TABLE `tbl_disciplinary_record_form` (
  `dis_id` int(10) UNSIGNED NOT NULL,
  `dis_uploaded_img` varchar(255) NOT NULL,
  `dis_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dis_first_name` varchar(50) NOT NULL,
  `dis_middle_name` varchar(50) DEFAULT NULL,
  `dis_last_name` varchar(50) NOT NULL,
  `dis_client_assigned` varchar(50) NOT NULL,
  `dis_violation` varchar(50) NOT NULL,
  `dis_offense` varchar(20) NOT NULL,
  `dis_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_disciplinary_record_form`
--

INSERT INTO `tbl_disciplinary_record_form` (`dis_id`, `dis_uploaded_img`, `dis_id_number`, `dis_first_name`, `dis_middle_name`, `dis_last_name`, `dis_client_assigned`, `dis_violation`, `dis_offense`, `dis_date_created`) VALUES
(4, 'class1.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'Head Office', 'AWOL', '1st', '2017-10-28 04:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `document_id` int(10) UNSIGNED NOT NULL,
  `document` varchar(255) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `document_description` varchar(500) NOT NULL,
  `types_of_document` varchar(500) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `doc_date_uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`document_id`, `document`, `document_title`, `document_description`, `types_of_document`, `owner`, `doc_date_uploaded`) VALUES
(1, 'DCV1.pdf', 'sdfghj', 'sdfghjk', 'Applicant''s Form', 'sdfghjk', '2017-10-27 13:58:57'),
(2, 'DCV2.pdf', 'Resume', 'Resume of Jefferson Azur', 'Member Forms', 'Jefferson Azur', '2017-10-27 14:08:43'),
(3, 'DCV-maam-che.pdf', 'Che', 'Che Che', 'Applicant''s Form', 'asdfghjk', '2017-10-27 17:44:36'),
(7, 'josh.pdf', 'Josh', 'Asdfghh', 'Applicant''s Form', 'sdfghjkl', '2017-10-28 04:13:41'),
(8, 'RN - Oncology Inpatient Ward.pdf', 'Inpatient Ward', 'Hospital management system', 'Member Forms', 'Jefferson Azur', '2017-10-28 05:55:25'),
(9, '4bfdeffe28e.pdf', 'Resume', 'resume 1', 'Applicant''s Form', 'Jefferson Azur', '2017-10-28 09:05:24'),
(10, 'Pediatric_Admission_Orders_Sample.pdf', 'Pediatric', 'Hospital Managament System', 'Applicant''s Form', 'Ruth Catalan', '2017-10-28 09:19:07'),
(11, '25612643905.pdf', 'Resume', 'Resume of Maam che', 'Employee''s Form', 'Jefferson Azur', '2017-10-28 09:27:03'),
(12, '2751254-trailer_whatremainsofedithfinch_20141206-65x87.jpg', 'Random Photo', 'Random', 'Member Forms', 'Marck Gil Sena', '2017-10-28 11:43:10'),
(13, 'b28c87f3fd78442ec81785a2c68928ff-300x250.gif', 'Random gIF', 'GIF', 'Applicant''s Form', 'Marckos', '2017-10-28 12:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtrs_only_form`
--

CREATE TABLE `tbl_dtrs_only_form` (
  `dtr_id` int(10) UNSIGNED NOT NULL,
  `dtr_uploaded_img` varchar(255) NOT NULL,
  `dtr_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_middle_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `dtr_last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_coor_assigned` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_period_date` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_period_covered_from` date NOT NULL,
  `dtr_period_covered_to` date NOT NULL,
  `dtr_payout_date` date NOT NULL,
  `dtr_farm_department` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dtr_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dtrs_only_form`
--

INSERT INTO `tbl_dtrs_only_form` (`dtr_id`, `dtr_uploaded_img`, `dtr_id_number`, `dtr_first_name`, `dtr_middle_name`, `dtr_last_name`, `dtr_client`, `dtr_coor_assigned`, `dtr_period_date`, `dtr_period_covered_from`, `dtr_period_covered_to`, `dtr_payout_date`, `dtr_farm_department`, `dtr_date_created`) VALUES
(6, 'class.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'Arhurt Sezo', 'Demelyn Monzon', '10/28/2017 - 10/28/2017', '2012-03-12', '2012-03-12', '2012-03-12', 'IT Department', '2017-10-28 04:49:02'),
(7, 'Create Workflow.jpg', '2014-00036-CM-0', 'marck', 'Cayetano', 'sena', 'Ruth Catalan', 'Lester Formoso', '11/28/2017 - 05/05/2018', '2017-01-01', '2018-01-01', '2018-01-01', 'IT Department', '2017-10-28 09:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices_form`
--

CREATE TABLE `tbl_invoices_form` (
  `inv_id` int(10) UNSIGNED NOT NULL,
  `inv_uploaded_img` varchar(255) NOT NULL,
  `inv_invoice_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_soa_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_billings_amount` varchar(255) NOT NULL,
  `inv_invoice_date` date NOT NULL,
  `inv_payout_date` date NOT NULL,
  `inv_period_covered_from` date NOT NULL,
  `inv_period_covered_to` date NOT NULL,
  `inv_date_received_by_coordinator` date NOT NULL,
  `inv_date_received_by_client` date NOT NULL,
  `inv_date_received_by_asiapro` date NOT NULL,
  `inv_drawee_bank` varchar(50) NOT NULL,
  `inv_check_date` date NOT NULL,
  `inv_check_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_check_amount` varchar(255) NOT NULL,
  `inv_OR_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_OR_date` date NOT NULL,
  `inv_adjustment_type` varchar(50) NOT NULL,
  `inv_bank_deposited` varchar(50) CHARACTER SET utf8 NOT NULL,
  `inv_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoices_form`
--

INSERT INTO `tbl_invoices_form` (`inv_id`, `inv_uploaded_img`, `inv_invoice_number`, `inv_soa_number`, `inv_client`, `inv_billings_amount`, `inv_invoice_date`, `inv_payout_date`, `inv_period_covered_from`, `inv_period_covered_to`, `inv_date_received_by_coordinator`, `inv_date_received_by_client`, `inv_date_received_by_asiapro`, `inv_drawee_bank`, `inv_check_date`, `inv_check_number`, `inv_check_amount`, `inv_OR_number`, `inv_OR_date`, `inv_adjustment_type`, `inv_bank_deposited`, `inv_date_created`) VALUES
(5, 'class1.JPG', '3456', '234567', 'Jefferson', '25,000', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2012-03-12', '2345634567', '2012-03-12', '213456', '50,000', '3456', '2034-04-04', 'Credit Note', '15,000', '2017-10-28 04:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_liquidations_form`
--

CREATE TABLE `tbl_liquidations_form` (
  `liq_id` int(10) UNSIGNED NOT NULL,
  `liq_uploaded_img` varchar(255) NOT NULL,
  `liq_cv_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `liq_dm_date` date NOT NULL,
  `liq_amount` varchar(255) NOT NULL,
  `liq_first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `liq_middle_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `liq_last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `liq_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `liq_particulars` varchar(50) CHARACTER SET utf8 NOT NULL,
  `liq_date_processed` date NOT NULL,
  `liq_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_liquidations_form`
--

INSERT INTO `tbl_liquidations_form` (`liq_id`, `liq_uploaded_img`, `liq_cv_number`, `liq_dm_date`, `liq_amount`, `liq_first_name`, `liq_middle_name`, `liq_last_name`, `liq_client`, `liq_particulars`, `liq_date_processed`, `liq_date_created`) VALUES
(3, 'class.JPG', '1234567', '2012-03-12', '50,000', 'Jefferson', 'Obena', 'Azur', 'Demelyn Monzon', 'asdfghj', '2012-03-12', '2017-10-28 04:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loans_form`
--

CREATE TABLE `tbl_loans_form` (
  `loan_id` int(10) UNSIGNED NOT NULL,
  `loan_uploaded_img` varchar(255) NOT NULL,
  `loan_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `loan_first_name` varchar(50) NOT NULL,
  `loan_middle_name` varchar(50) DEFAULT NULL,
  `loan_last_name` varchar(50) NOT NULL,
  `loan_date_received` date NOT NULL,
  `loan_client` varchar(50) NOT NULL,
  `loan_type_of_loan` varchar(50) NOT NULL,
  `loan_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loans_form`
--

INSERT INTO `tbl_loans_form` (`loan_id`, `loan_uploaded_img`, `loan_id_number`, `loan_first_name`, `loan_middle_name`, `loan_last_name`, `loan_date_received`, `loan_client`, `loan_type_of_loan`, `loan_date_created`) VALUES
(3, 'Capture.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', '2012-03-23', 'Arthur Serzo', 'EL', '2017-10-28 04:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_file_form`
--

CREATE TABLE `tbl_member_file_form` (
  `mem_id` int(10) UNSIGNED NOT NULL,
  `mem_uploaded_img` varchar(255) NOT NULL,
  `mem_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mem_first_name` varchar(50) NOT NULL,
  `mem_middle_name` varchar(50) DEFAULT NULL,
  `mem_last_name` varchar(50) NOT NULL,
  `mem_mothers_maiden` varchar(50) NOT NULL,
  `mem_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mem_contact_number` varchar(255) NOT NULL,
  `mem_gender` varchar(6) NOT NULL,
  `mem_civil_status` varchar(50) NOT NULL,
  `mem_birthdate` date NOT NULL,
  `mem_age` varchar(255) NOT NULL,
  `mem_skills` varchar(300) NOT NULL,
  `mem_religion` varchar(50) DEFAULT NULL,
  `mem_educational_attainment` varchar(500) NOT NULL,
  `mem_date_started` date NOT NULL,
  `mem_date_terminated` date DEFAULT NULL,
  `mem_client_assigned` varchar(100) NOT NULL,
  `mem_field_assignment` varchar(100) NOT NULL,
  `mem_bank_account` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mem_membership_type` varchar(50) NOT NULL,
  `mem_membership_agreement_status` varchar(50) NOT NULL,
  `mem_affirmation_status` varchar(50) NOT NULL,
  `mem_information_sheet` varchar(10) NOT NULL,
  `mem_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member_file_form`
--

INSERT INTO `tbl_member_file_form` (`mem_id`, `mem_uploaded_img`, `mem_id_number`, `mem_first_name`, `mem_middle_name`, `mem_last_name`, `mem_mothers_maiden`, `mem_address`, `mem_contact_number`, `mem_gender`, `mem_civil_status`, `mem_birthdate`, `mem_age`, `mem_skills`, `mem_religion`, `mem_educational_attainment`, `mem_date_started`, `mem_date_terminated`, `mem_client_assigned`, `mem_field_assignment`, `mem_bank_account`, `mem_membership_type`, `mem_membership_agreement_status`, `mem_affirmation_status`, `mem_information_sheet`, `mem_date_created`) VALUES
(7, 'class.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'Obena', 'Metro Manila', '09071840673', 'male', 'single', '2012-03-12', '20', 'Programming', 'Roman Catholic', 'College Level', '2012-03-12', '2012-03-12', 'Head Office', 'IT Department', '0532013000', 'Reliever', 'Notarized', 'with', 'with', '2017-10-28 04:39:24'),
(8, 'Login.JPG', '2014-00036-CM-0', 'marck', 'Cayetano', 'sena', 'Cayetano', 'Bulacan', '09071840673', 'male', 'single', '1997-01-01', '20', 'Programming', 'Roman Catholic', 'College Graduate', '2010-01-01', '2015-01-01', 'Logistics Office', 'IT Department', '1234567', 'Regular Member', 'Not Notarized', 'with', 'with', '2017-10-28 09:31:53'),
(9, '1781358_180.jpg', '12', 'Ruth', 'Catalan', 'Formoso', 'Catalan', 'Bulacan', '091312784131', 'female', 'single', '1997-09-17', '20', 'Programming', 'Roman Catholic', 'College Graduate', '2017-09-09', '2017-09-10', 'Head Office', 'None', '12356123', 'Regular Member', 'Not Notarized', 'without', 'with', '2017-10-28 11:47:58'),
(10, 'googlelogo_dark_color_84x28dp.png', '12', 'Ruth', 'Catalan', 'Sena', 'Catalan', 'Bulacan', '091203871234', 'female', 'single', '1997-09-17', '20', 'Programming', 'Roman Catholic', 'College Graduate', '2017-09-09', '2070-09-10', 'Accounting Office', 'Gather Resource', '1230', 'Regular Member', 'Notarized', 'with', 'with', '2017-10-28 12:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quit_claim_form`
--

CREATE TABLE `tbl_quit_claim_form` (
  `qui_id` int(10) UNSIGNED NOT NULL,
  `qui_uploaded_img` varchar(255) NOT NULL,
  `qui_id_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qui_first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qui_middle_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qui_last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qui_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qui_date_started` date NOT NULL,
  `qui_last_day_of_work` date NOT NULL,
  `qui_date_applied` date NOT NULL,
  `qui_cv_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qui_amount` varchar(255) NOT NULL,
  `qui_claim_thru_spa` varchar(50) NOT NULL,
  `qui_member_type` varchar(50) NOT NULL,
  `qui_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quit_claim_form`
--

INSERT INTO `tbl_quit_claim_form` (`qui_id`, `qui_uploaded_img`, `qui_id_number`, `qui_first_name`, `qui_middle_name`, `qui_last_name`, `qui_client`, `qui_date_started`, `qui_last_day_of_work`, `qui_date_applied`, `qui_cv_number`, `qui_amount`, `qui_claim_thru_spa`, `qui_member_type`, `qui_date_created`) VALUES
(3, 'Capture.JPG', '2014-00036-CM-0', 'Jefferson', 'Obena', 'Azur', 'Marck Catapang', '2012-03-12', '2012-03-12', '2012-03-12', '1234567', '3245678', 'With', 'Revenue', '2017-10-28 04:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_for_payments_form`
--

CREATE TABLE `tbl_request_for_payments_form` (
  `req_id` int(10) UNSIGNED NOT NULL,
  `req_uploaded_img` varchar(255) NOT NULL,
  `req_client_supplier` varchar(50) CHARACTER SET utf8 NOT NULL,
  `req_date_requested` date NOT NULL,
  `req_reference_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `req_check_voucher_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `req_date_issued` date NOT NULL,
  `req_prepared_by` varchar(100) NOT NULL,
  `req_requested_amount` varchar(255) NOT NULL,
  `req_satellite_office` varchar(50) CHARACTER SET utf8 NOT NULL,
  `req_types_of_loan` varchar(50) NOT NULL,
  `req_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request_for_payments_form`
--

INSERT INTO `tbl_request_for_payments_form` (`req_id`, `req_uploaded_img`, `req_client_supplier`, `req_date_requested`, `req_reference_number`, `req_check_voucher_number`, `req_date_issued`, `req_prepared_by`, `req_requested_amount`, `req_satellite_office`, `req_types_of_loan`, `req_date_created`) VALUES
(3, 'class.JPG', 'Marck Catapang', '2012-03-12', '1234567', '1234567', '2012-03-12', 'Jeff Azur', '50,000', 'Makati', 'Expense', '2017-10-28 04:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_middle_name` varchar(50) DEFAULT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_email_address` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_contact_number` decimal(10,0) NOT NULL,
  `user_age` decimal(10,0) NOT NULL,
  `user_img_name` varchar(50) NOT NULL,
  `user_status` tinyint(2) NOT NULL,
  `user_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_annual_pe_form`
--
ALTER TABLE `tbl_annual_pe_form`
  ADD PRIMARY KEY (`ape_id`);

--
-- Indexes for table `tbl_applicant_form`
--
ALTER TABLE `tbl_applicant_form`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_benefits_form`
--
ALTER TABLE `tbl_benefits_form`
  ADD PRIMARY KEY (`ben_id`);

--
-- Indexes for table `tbl_clearance_waiver_form`
--
ALTER TABLE `tbl_clearance_waiver_form`
  ADD PRIMARY KEY (`cle_id`);

--
-- Indexes for table `tbl_disciplinary_record_form`
--
ALTER TABLE `tbl_disciplinary_record_form`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_dtrs_only_form`
--
ALTER TABLE `tbl_dtrs_only_form`
  ADD PRIMARY KEY (`dtr_id`);

--
-- Indexes for table `tbl_invoices_form`
--
ALTER TABLE `tbl_invoices_form`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `tbl_liquidations_form`
--
ALTER TABLE `tbl_liquidations_form`
  ADD PRIMARY KEY (`liq_id`);

--
-- Indexes for table `tbl_loans_form`
--
ALTER TABLE `tbl_loans_form`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `tbl_member_file_form`
--
ALTER TABLE `tbl_member_file_form`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_quit_claim_form`
--
ALTER TABLE `tbl_quit_claim_form`
  ADD PRIMARY KEY (`qui_id`);

--
-- Indexes for table `tbl_request_for_payments_form`
--
ALTER TABLE `tbl_request_for_payments_form`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_role_id` (`fk_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_annual_pe_form`
--
ALTER TABLE `tbl_annual_pe_form`
  MODIFY `ape_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_applicant_form`
--
ALTER TABLE `tbl_applicant_form`
  MODIFY `app_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_benefits_form`
--
ALTER TABLE `tbl_benefits_form`
  MODIFY `ben_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_clearance_waiver_form`
--
ALTER TABLE `tbl_clearance_waiver_form`
  MODIFY `cle_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_disciplinary_record_form`
--
ALTER TABLE `tbl_disciplinary_record_form`
  MODIFY `dis_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `document_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_dtrs_only_form`
--
ALTER TABLE `tbl_dtrs_only_form`
  MODIFY `dtr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_invoices_form`
--
ALTER TABLE `tbl_invoices_form`
  MODIFY `inv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_liquidations_form`
--
ALTER TABLE `tbl_liquidations_form`
  MODIFY `liq_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_loans_form`
--
ALTER TABLE `tbl_loans_form`
  MODIFY `loan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_member_file_form`
--
ALTER TABLE `tbl_member_file_form`
  MODIFY `mem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_quit_claim_form`
--
ALTER TABLE `tbl_quit_claim_form`
  MODIFY `qui_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_request_for_payments_form`
--
ALTER TABLE `tbl_request_for_payments_form`
  MODIFY `req_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`fk_role_id`) REFERENCES `tbl_role` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
