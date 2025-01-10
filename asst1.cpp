using namespace std;
#include<iostream>
class demo
{
	public:
	void accept(int x,int y=3)
	{
		int m=1;
		for(int i=1;i<=y;i++)
		{
			m=m*x;
		}
	  cout<<"\n power of x^y="<<m;
	}

};
int main()
{
	demo ob;
	ob.accept(2);
	ob.accept(4,2);
}
