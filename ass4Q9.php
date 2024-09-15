<?php
 class stud
{
   public $rno;
   public $sname;
   public $per;
  function accept($rno,$sname,$per)
  {
   $this->rno=$rno;
   $this->sname=$sname;
   $this->per=$per;
  }
 function disp()
  {
    echo("<br> roll no=".$this->rno);
    echo("<br> name=".$this->sname);
    echo("<br> per=".$this->per);
 }
}
$ob=new stud();
$ob->accept(101,"tanuja",81.98);
$ob->disp();
?>