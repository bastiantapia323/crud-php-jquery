<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ajax_crudModel extends Model{
    
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $table = 'persona';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name', 'email', 'nro_documento'];

	public function noticeTable()
	{
		$builder = $this->db->table('persona');

		return $builder;
	}

	public function button()
	{
		$action_button = function($row){
			return '
				<button type="button" name="edit" class="btn btn-warning btn-sm edit" data-id="'.$row['id'].'">Edit</button>
				&nbsp;
				<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row['id'].'">Delete</button>
				';
		};

		return $action_button;
	}
}


?>


