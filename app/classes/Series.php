<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $type;
    protected $temp;


    public function __construct($data = null )
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data ['ending_number'];
        $this->type=$data['type'];
    }

    public function index()
{
   if ($this->type=='asc')
   {
      if ($this->startingNumber > $this->endingNumber){
          $this->temp = $this->startingNumber;
          $this->startingNumber = $this->endingNumber;
          $this->endingNumber = $this->temp;
      }
       for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++ )
       {
           $this->result .=$this->i. ' ';
       }
   }
   else
   {
       if ($this->startingNumber < $this->endingNumber)
       {
           $this->temp = $this->startingNumber;
           $this->startingNumber = $this->endingNumber;
           $this->endingNumber = $this->temp;
       }
       for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i-- )
       {
           $this->result .=$this->i. ' ';
       }
   }

   return $this->result;
}


}