<?php

 namespace App\Tests\Entity;

 use App\Entity\User;
 use PHPUnit\Framework\TestCase;

 class UserTest extends TestCase
 {
     public function testCreateUser()
     {
         $login='toto';

         $user = new User();
         $user->setLogin($login);
         $user->setPassword('root');
         $user->getPassword();
         $this->assertEquals($login, $user->getLogin());
     }
 }
