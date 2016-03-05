<?php if (!defined("youtube")) die;

class youtube {
  private $complete_rand_string = "";
	private $rand_chars = array(
    0 => array("a","_","b","c","d","-","e","f","g","h","i","j","k","W","l","m","n","o","p","q","r","s","t","u","v","w","-","x","y","z","_"),
    1 => array("A","B","_","C","-","D","E","F","-","G","H","I","J","K","L","M","N","O","P","Q","_","R","S","T","U","V","W","X","Y","_","Z"),
    2 => array("a","B","c","-","D","e","F","g","H","i","J","k","L","m","-","N","o","P","q","_","R","s","T","u","V","w","X","_","-","y","Z"),
    3 => array("A","B","-","c","D","_","E","f","G","H","-","i","J","K","l","M","N","o","P","Q","r","S","T","u","V","W","_","x","Y","-","Z"),
    4 => array("b","-","a","w","z","y","f","g","B","m","q","j","k","l","v","n","o","p","i","_","r","s","t","u","h","_","c","x","e","d","-")
	);
	function __cosntruct(){
            
        //

	}
	public function generate_random_id(){

        for ($i = 0; $i < 11; $i++){
         $this->complete_rand_string .= $this->rand_chars[rand(0,4)][rand(0,31)];
        }
	}

	public function get_random_id(){
		return $this->complete_rand_string;
	}
	public function __destruct() {
        $this->complete_rand_string = null;
   }
};
