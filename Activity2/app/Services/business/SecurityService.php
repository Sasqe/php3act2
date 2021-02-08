<?php 
namespace App\Services\Business;

use App\Model\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService{
    private $verifyCred;
    
    public function login(UserModel $credentials){
        $this->verifyCred = new SecurityDAO();
        
        return $this->verifyCred->findByUser($credentials);
    }
}
?>