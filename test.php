<?php

error_reporting(E_ALL ^ E_NOTICE) ;

 class Test{
 
     function __construct(){
	 
	  
		//echo 'hello !';
	 }
 
     public function setCols($tab = array()){
	    
	    $newTab = array();
		
	    if(count($tab)>0)
		{
			foreach($tab as $value){
			  
				$newTab[] =  '<th>'.$value.'</th>';
			}
			return $newTab;
		}
        else return $tab;		
	  
	 }	 
     public function insertRows($tab = array()){
	 
	    $newTab = array();
		
	    if(count($tab)>0)
		{
		   foreach($tab as $value)
		   {
		      $newTab[] = '<td>'.$value.'</td>';		      
		   }
		   return $newTab;
		}
		else return $tab;
	 
	 }
	 public function sortBy(){
	 
	 
	 }
	 public function find(){
	 
	 }
	 public function display($tab = array()){
	 
	    echo '<html><body><table>';
		//print_r($tab);
		foreach($tab as $value)
		{
		   echo $value;
		}
		
		echo '</table></body></html>';
	 
	 }
 };
 
$test = new Test();
$tabCol = array();

 for($i=0;$i<=3;$i++)
 {
    $tabCol[] = 'colonne '.$i;
 }
 
$tabLine = array();
 for($i=0;$i<=3;$i++)
 {
    $tabLine[] = 'Cellule'.$i;
 }
$tabCol = $test->setCols($tabCol);
$tabLine = $test->insertRows($tabLine);
 $finalTab = array_merge($tabCol,$tabLine);
 
 $test->display($finalTab);

?>