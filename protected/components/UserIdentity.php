<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{

		$user=Usuarios::model()->find("correo_institucional=?", array(strtolower($this->username)));
 		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		elseif($user->estatus == 2)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else
		{
			$this->_id = $user->id;
			$this->setState('role', $user->role);
			$this->setState('id_usr', $user->role);
			$this->setState('correo', $user->correo_institucional);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	/*public function setid()
	{

	}*/
}