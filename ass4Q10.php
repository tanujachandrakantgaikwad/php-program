<?php
 class fruit
{
   public $name;
   public $color;
   public $price;
  function accept($name,$color,$price)
  {
   $this->name=$name;
   $this->color=$color;
   $this->price=$price;
  }
 function disp()
  {
    echo("<br> name=".$this->name);
    echo("<br> color=".$this->color);
    echo("<br> price=".$this->price);
 }
}
$ob=new fruit();
$ob->accept("apple","red",100);
$ob->disp();
?>