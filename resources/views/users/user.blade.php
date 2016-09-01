<?php

class User
{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $phone;
    protected $id;
    protected $db;
    const DB_NAME="user";

    function __construct()
    {
        $this->db=mysqli_connect('localhost','root','',self::DB_NAME);
    }
    public  function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        return $this->id = $id;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        return $this->firstName=$firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        return $this->lastName=$lastName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        return $this->address=$address;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function setphone($phone)
    {
        return $this->phone=$phone;
    }

    function save()
    {
        if (!$this->getId()) {
            $query = 'insert into users set
first_name = "' . $this->getFirstName() . '"
, last_name="' . $this->getLastName() . '",
address="' . $this->getAddress() . '"
,phone="' . $this->getPhone() . '"';
        } else {

            $query = 'update users set
first_name = "' . $this->getFirstName() . '"
, last_name="' . $this->getLastName() . '",
address="' . $this->getAddress() . '"
,phone="' . $this->getPhone() . '" where id ="' . $this->getId() . '"';

        }
        return mysqli_query($this->db, $query);

    }
    function getAll()
    {
        $query="select* from tbl_user";
        $result=mysqli_query($this->db,$query);
        $userArr=[];
        while($data=mysqli_fetch_assoc($result))
        {
            $userArr=[];
            $user= new self();
            $user->setId($data['id']);
            $user->setFirstName( $data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setAddress($data['address']);
            $user->setphone($data['phone']);
            $userArr[]=$user;


        }

        return($userArr);


    }

    function update(){

        $query='update tbl_user
      first_name="'.$this->getFirstName().'",
      last_name="'.$this->getLastName().'",
      address="'.$this->getAddress().'",
      phone="'.$this->getPhone().'",where id="'.$this->getId().'"';

        mysqli_query($this->db,$query);


    }
    function getByid($id)
    {
        $query=" select *from tbl_user where id='".$id."'";

        $result=mysqli_query($this->db,$query);

        if(!empty($result))
        {
            $data=mysqli_fetch_assoc($result);
            $user=new self();
            $user->setId($data['id']);
            $user->setFirstName( $data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setAddress($data['address']);
            $user->setphone($data['phone']);
            $userArr[]=$user;

        }
        return $user;

    }
    function  delete($id)
    {
        $sql = "delete from users where id='" . $id . "'";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}
/**
 * Created by PhpStorm.
 * User: Rajita
 * Date: 8/29/2016
 * Time: 7:31 PM
 */