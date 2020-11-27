<?php

class Userclass {

    public $name;
    public $username;
    public $email;

    function __construct($name, $username, $email) {
        $this->name = $name;
	$this->username = $username;
	$this->email = $email;	
    }
}


class Post extends Userclass {

   function addFriend() {
       echo "{$this->name} . Added a Friend";
   }

   function postStatus() {
       echo "{$this->name} . Posted a status";
   }

}

$nani = new Post("Iris Noreen Reyes", "errbended", "irisnoreenreyes@gmail.com");
$nani->addFriend();
echo "<br>";
$nani->postStatus();

?>