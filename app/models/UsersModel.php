<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Users authenticator.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class UsersModel extends Object implements IAuthenticator
{

	/**
	 * Performs an authentication
	 * @param  array
	 * @return IIdentity
	 * @throws AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		$username = $credentials[self::USERNAME];
		$password = md5($credentials[self::PASSWORD]);

		$row = dibi::fetch('SELECT * FROM users WHERE login=%s', $username);

		if (!$row) {
			throw new AuthenticationException("User '$username' not found.", self::IDENTITY_NOT_FOUND);
		}

		if ($row->password !== $password) {
			throw new AuthenticationException("Invalid password.", self::INVALID_CREDENTIAL);
		}

		unset($row->password);
		return new Identity($row->id, $row->role, $row);
	}

}
