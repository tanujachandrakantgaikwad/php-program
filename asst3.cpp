using namespace std;
#include<iostream>
#include<string.h>
class student
{
	public:
		int r_no;
		char name[20];
		float per;
		void accept(int r_no,char name[20],float per)
		{
           this->r_no=r_no;
		   strcpy(this->name,name);
           this->per=per;
		}
		void disp()
		{
			cout<<"student Roll no="<<r_no<<endl;
			cout<<"student name="<<name<<endl;
			cout<<"student percentage="<<per<<endl;	
		}
}ob,ob1;
int main()
{
	ob.accept(1,"om",95.5f);
	ob1.accept(11,"omkar",65.4f);
	if(ob.per>ob1.per)
	   ob.disp();
	else
	  ob1.disp();
}
