<?php
$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


<?php
/**
 * 
 */
class brand
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function insert_brand($brandName){
		// Check bien user,pass xem hop le hay khong
		$brandName = $this->fm->validation($brandName);
		
		// connect ten category moi them toi db
		$brandName = mysqli_real_escape_string($this->db->link, $brandName);
		

		if(empty($brandName)){
			$alert = "<span class='error'>Tên thương hiệu không được trống</span>";
			return $alert;
		}else{
			$query = "INSERT INTO tbl_brand(brandName) VALUES('$brandName')";
			$query1 = "SELECT * FROM tbl_brand where brandName = '$brandName'";
			$result1 = $this->db->select($query1);
			if(!$result1){
			$result = $this->db->insert($query);
			
			if($result){
				$alert = "<span class='success'>Thêm thành công</span>";
				return $alert; 
			} else{
				$alert = "<span class='error'>Thêm thất bại</span>";
				return $alert; 
			}
		}
		else{
			$alert = "<span class='error'>Đã có thương hiệu</span>";
				return $alert; 
		}
		} 
		}

	

	public function show_brand(){
		$query = "SELECT * FROM tbl_brand order by brandId desc";
		$result = $this->db->select($query);
		return $result;
	}

	public function getbrandbyId($id){
		$query = "SELECT * FROM tbl_brand where brandId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function del_brand($id){
		$query = "DELETE FROM tbl_brand where brandId = '$id'";
		$result = $this->db->delete($query);
		if($result){
				$alert = "<span class='success'>Xóa thành công</span>";
				return $alert; 
			} else{
				$alert = "<span class='error'>Xóa thất bại</span>";
				return $alert; 
			}
	}

	public function update_brand($brandName, $id){
		// Check bien user,pass xem hop le hay khong
		$brandName = $this->fm->validation($brandName);
		
		// connect ten category moi them toi db
		$brandName = mysqli_real_escape_string($this->db->link, $brandName);
		$id = mysqli_real_escape_string($this->db->link, $id);

			if(empty($brandName)){
			$alert = "<span class='error'>Tên thương hiệu không được trống</span>";
			return $alert;
		}else{
			$query = "UPDATE tbl_brand SET brandName ='$brandName' WHERE brandId ='$id'";
			$result = $this->db->update($query);
			if($result){
				$alert = "<span class='success'>Sửa thành công</span>";
				return $alert; 
			} else{
				$alert = "<span class='error'>Sửa thất bại</span>";
				return $alert; 
			}
		}
	}
	



}
?>