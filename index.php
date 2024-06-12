<?php

// setter() & getter();

class User{
   public $email;
   public function setEmail($email){
      // email validate
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         return ;
      }
      return $this->email = $email;
   }
   public function getEmail(){
      return $this->email;
   }
}
$user = new User;
$user->setEmail("ayubh9288@gmail.com");

echo $user->getEmail();

echo PHP_EOL;

class Validator
{
   protected $errors = [];
   public function validate($data, $rules)
   {
      return $this->errors[] = 'This email is required';
   }
   public function fails()
   {
      return !empty($this->errors);
   }
   public function getErrors()
   {
      return $this->errors;
   }
}
$validator = new Validator;
$validator->validate([''],['requied']);
if($validator->fails())
{
   die('Fails');
}


