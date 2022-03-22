<?php

	//include "Model/DBConfig.php";

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}

	$addAction = array();

	switch($action){
		case 'add':{
			if(isset($_POST['add_user'])){
				$fullName = $_POST['fullName'];
				$yearOfBirth = $_POST['yearOfBirth'];
				$address = $_POST['address'];

				if($fullName != null && $yearOfBirth != null && $address != null){
					$db->InsertData($fullName, $yearOfBirth, $address);
					$addAction[] = 'add_success';
				}
				else{
					$addAction[] = 'add_fail';
				}
			}

			require_once('View/member/add_user.php');
			break;
		}

		case 'edit':{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "member";
				$dataID = $db->getDataID($tblTable, $id);
			}
			if (isset($_POST['edit_user'])) {
				$fullName = $_POST['fullName'];
				$yearOfBirth = $_POST['yearOfBirth'];
				$address = $_POST['address'];

				//$db->UpdateData($id, $fullName, $yearOfBirth, $address);
				if($fullName != null && $yearOfBirth != null && $address != null){
					$db->UpdateData($id, $fullName, $yearOfBirth, $address);
					header('location: index.php?controller=member&action=list');
				}
				else{
					$addAction[] = 'add_fail';
				}

			}
			require_once('View/member/edit_user.php');
			break;
		}

		case 'delete':{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tbltable = "member";

				if($db->delete($tblTable, $id)){
					header('location: index.php?controller=member&action=list');
				}
			}
			//require_once('View/member/delete_user.php');
			break;
		}

		case 'list':{
			$tblTable = "member";
			$data = $db->getAllData($tblTable);
			require_once('View/member/list.php');
			break;
		}

		default:{
			require_once('View/member/list.php');
		}
	}

?>