<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class authDataV1
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var int $masterFid
     */
    protected $masterFid = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \Imper86\DpdWsdlApi\Wsdl\authDataV1
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasterFid()
    {
      return $this->masterFid;
    }

    /**
     * @param int $masterFid
     * @return \Imper86\DpdWsdlApi\Wsdl\authDataV1
     */
    public function setMasterFid($masterFid)
    {
      $this->masterFid = $masterFid;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Imper86\DpdWsdlApi\Wsdl\authDataV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
