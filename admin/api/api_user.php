<?php 
	
	session_start();
	require_once '../../connect.php';

	switch ($_REQUEST['ac']) {
		case 'login':
			
			$query = $conn->query("SELECT * FROM tb_user WHERE username = '".$_REQUEST['username']."' AND password  = '".md5($_REQUEST['password'])."' ");

			if ($query->num_rows <= 0) {
				$data = array("status"=>false, 'msg'=>'ลงชื่อเข้าใช้ไม่สำเร็จ');
			}else{

				$result = $query->fetch_object();
				$update = $conn->query("UPDATE tb_user SET last_login = NOW() WHERE user_id = '".$result->user_id."' ");
				$_SESSION["sess_id"] = session_id();	
				$_SESSION['user_id']=$result->user_id;	
				$_SESSION['user_role']=$result->user_role;		
				$_SESSION['fname']=$result->fname;
				$_SESSION['lname']=$result->lname;				
				$_SESSION['username']=$result->username;
				$_SESSION['phone']=$result->phone;
				$path = $result->user_role == 2 ? '../../' : '../';
				$data = array('status'=>true, 'msg'=>'ลงชื่อเข้าใช้สำเร็จ','path'=>$path);
			}	

			echo json_encode($data);

			break;
		
		case 'reg':

			if ($conn->query("SELECT tb_user.user_id FROM tb_user WHERE username = '".$_REQUEST['username']."' ")->num_rows > 1) {
				$data = array('status'=>false, 'msg'=>'username ของคุณซ้ำ');
			}else{
				$query = $conn->query("INSERT INTO tb_user(fname, lname, username, password, phone, created_at,user_role) 
					VALUES ('".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['username']."', '".md5($_REQUEST['password'])."', 
						'".$_REQUEST['phone']."', NOW(), '2'   ) ");
				if ($query) {
					$data = array('status'=>true, 'msg'=>'สมัรเข้าใช้งานสำเร็จ');
				}else{
					$data = array('status'=>false, 'msg'=>'สมัครไม่สำเร็จ');
				}

			}

			echo json_encode($data);

			break;

		case 'edit':
			$query = $conn->query("UPDATE tb_user SET fname = '".$_REQUEST['fname']."', lname = '".$_REQUEST['lname']."', username = '".$_REQUEST['username']."', phone = '".$_REQUEST['phone']."'
			 WHERE user_id = '".$_REQUEST['user_id']."' ");
			if ($query) {

				$data = array('status'=>true, 'msg'=>'แก้ไขข้อมูลสำเร็จ');
				$_SESSION['fname']=$_REQUEST['fname'];
				$_SESSION['lname']=$_REQUEST['lname'];				
				$_SESSION['username']=$_REQUEST['username'];
				$_SESSION['phone']=$_REQUEST['phone'];

				$path = $_SESSION['user_role'] == 2 ? '../../' : '../';
				$data = array('status'=>true, 'msg'=>'แก้ไขข้อมูลสำเร็จ','path'=>$path);

			}else{
				$data = array('status'=>false, 'msg'=>'แก้ไขข้อมูลไม่สำเร็จ');
			}

			echo json_encode($data);
			

			break;	

		default:
			// code...
			break;
	}


 ?>