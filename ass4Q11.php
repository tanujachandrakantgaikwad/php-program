<?php
 class book
{  
   public $bid;
   public $name;
   public $publication;
   public $author;
   public $price;
 function accept($bid,$name,$publication,$author,$price)
  {
     $this->bid=$bid;
     $this->name=$name;
     $this->publication=$publication;
     $this->author=$author;
     $this->price=$price;
  }
 function disp()
  {
    echo("<br> Bid=".$this->bid);
    echo("<br> Name=".$this->name);
    echo("<br> Publication=".$this->publication);
    echo("<br> Author=".$this->author);
    echo("<br> Price=".$this->price);
 }
}
$ob=new book();
$ob->accept(101,"tanuja","vidyabharati","R.K.Narayan",200);
$ob->disp();
?>