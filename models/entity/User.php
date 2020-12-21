<?php


class User
{
    protected $user_id;
    protected $email;
    protected $pass_hashed;
    protected $name;
    protected $phone_number;
    protected $role_id;
    private $active;
    private $avatar;

    public function __construct($user_id, $email, $pass_hashed, $name, $phone_number, $role_id, $active)
    {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->pass_hashed = $pass_hashed;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->role_id = $role_id;
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassHashed()
    {
        return $this->pass_hashed;
    }

    /**
     * @param mixed $pass_hashed
     */
    public function setPassHashed($pass_hashed)
    {
        $this->pass_hashed = $pass_hashed;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @param mixed $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }


}
