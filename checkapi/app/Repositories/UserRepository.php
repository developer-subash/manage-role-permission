<?php 

namespace App\Repositories;
use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;


class UserRepository implements UserInterface 
{
	private $model;
	public function __construct(User $model)
	{
		$this->model = $model;
	}
	public function getAllUsers()
	{		
	 return $this->model->all();			
	}

	public function createUsers(array $data)
	{
		
		return $this->model->create($data);
	}

	public function deleteUser($user_email)
	{
		return $this->model->where('email',$user_email)->delete();
	}

	public function editUser($user_email)
	{
		return $this->model->where('email',$user_email)->first();	
	}

	public function updateUser(array $data,$user_email)
	{
		echo "update User here";
	}

}