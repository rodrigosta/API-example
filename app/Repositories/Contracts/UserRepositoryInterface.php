<?php
interface UserRepositoryInterface{
	public function getAllUsers();

	public function storeUser($request);

	public function showUser($id);

	public function updateUser($request, $id);

	public function deleteUser($id);
}
