using namespace std;
#include<iostream>
#include<string.h>
class self
{
	public:
	 void display_str(char s1[20])
	  {
	    cout<<"\n string="<<s1;  	
	  }
	  void display_str(int n,char s1[20])
	  {
	  	  cout<<"\n string=";
	  	for(int i=0;i<n;i++)
	      cout<<s1[i];  	
	  }	
	  void display_str(int m,int n,char s1[20])
	  {
	  	 cout<<"\n string=";
	  	for(int i=m;i<n;i++)
	    cout<<s1[i];  	
	  }
}ob;
int main()
{
    ob.display_str("tanuja gaikwad");
    ob.display_str(6,"tanuja gaikwad");
    ob.display_str(7,14,"tanuja gaikwad");
}	  
