<?php
/**
 * Этот класс выполняет аутентификацию и, при необходимости, регистрацию посетителя.
 */
class LoginzaUserIdentity implements IUserIdentity {

	private $id;
	private $name;
	private $isAuthenticated = false;
	private $states = array();

	public function __construct() {
	}

	/**
	 * Аутентификация пользователя.
	 * Этот метод ищет пользователя в БД. Если он не найден, создает нового.
	 * Устанавливает значения атрибутов.
	 *
	 * @param LoginzaModel $loginzaModel модель, содержащая данные от сервиса Loginza
	 * @return boolean true если пользователь найден или создан новый аккаунт, false - если недостаточно данных
	 */
	public function authenticate($loginzaModel = null) {

		if (empty($loginzaModel->identity) || empty($loginzaModel->provider)) {
			return false;
		}
        //сначала проверяем, существует ли такой пользователь в БД
        $criteria=new CDbCriteria;
        $criteria->condition = 'u_identity=:identity AND u_provider=:provider';
        $criteria->params = array(
            ':identity'=>$loginzaModel->identity
            , ':provider'=>$loginzaModel->provider
        );
		$user = User::model()->find($criteria);
		if (null !== $user) {
			//используем существующего пользователя
			$this->id = $user->u_id;
			$this->name = (null != $user->u_full_name) ? $user->u_full_name : $user->u_identity;
		}
		else {
			//создаем нового
			$user = new User();
			$user->u_identity = $loginzaModel->identity;
			$user->u_provider = $loginzaModel->provider;
			$user->u_email = $loginzaModel->email;
			$user->u_full_name = $loginzaModel->full_name;
			$user->save();
			$this->id = $user->u_id;
			$this->name = (null != $user->u_full_name) ? $user->u_full_name : $user->u_identity;
		}
		$this->isAuthenticated = true;
		return true;
	}

	public function getId() {
		return $this->id;
	}

	public function getIsAuthenticated() {
		return $this->isAuthenticated;
	}

	public function getName() {
		return $this->name;
	}

	public function getPersistentStates() {
		return $this->states;
	}
}
