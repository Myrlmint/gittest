
|<?php
	

    class User  {
    
    	private ?string $otchestvo = null;	
    	
       public function __construct(
       private string $familia,
       private string $imya, 
       private string $dataRoz,
    
        ) {}

       public function getFamilia() : string{
        return $this->familia;
       }
    
       public function getImya() : string{
        return $this->imya;
       }
    
       public function getDataRoz() : date {
        return $this->dataRoz;
       }
       
       public function setOtchestvo(string $otchestvo) : void {
       	  $this->otchestvo = $otchestvo;
       }
       
       public function getFullName() : string {
       	return implode(' ', [
       		$this->familia,
       		mb_substr($this->imya, 0, 1),
       		($this->otchestvo === null) ? '' : mb_substr($this->otchestvo, 0, 1)   
       	]);
       }
       
       public function __toString() : string {
         return $this->getFullName();
       }
      
       
    
    }
    
    $user1 = new User(familia: 'Конев', imya: 'Павел', dataRoz: ('2004-02-03'));
    $user1->setOtchestvo('sdf');
    $user2 = new User(familia: 'Капибарович', imya: 'Федор', dataRoz: ('2004-02-03'));
    $user2->setOtchestvo('hjk');
    $user3 = new User(familia: 'Уткин', imya: 'Лаур', dataRoz: ('2004-02-03'));
    
    echo $user2 . PHP_EOL;
    echo implode ("\n", [
        (string) $user1,
        (string) $user2,
        (string) $user3
    ]);
      
    