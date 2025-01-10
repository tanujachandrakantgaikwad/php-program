using namespace std;
#include<iostream>
class demp
{
	public:
	void circle(float r)
	{
		float a=3.14f*r*r;
		cout<<"\n area of circle="<<a<<endl;
	}
	void circum(float r=4.1f)
	{
		float c=2*3.14f*r;
		cout<<"\n circumference="<<c<<endl;
	}
}ob;
int main()
{
	ob.circle(7.1f);
	ob.circum();
}
