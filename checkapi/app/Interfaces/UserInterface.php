<?php

    namespace App\Interfaces;

    interface UserInterface
    {

    	public function getAllUsers();
    	public function createUsers(array $data);
    	public function deleteUser($user_email);
    	public function editUser(int $user_id);
    	public function updateUser(array $data,int $user_id);
    }	