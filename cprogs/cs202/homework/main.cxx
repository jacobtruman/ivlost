// FILE: main.cxx
// CLASS IMPLEMENTED: point (See document.h for documentation.)

#include <iostream>
#include "point.h"
using namespace std;
using main_skitch_1A::point;

int main()
{
	cout << endl;
        point p1(2.5, 0, 2.0);
	cout << "x before: " << p1.get_x() << endl;
        cout << "y before: " << p1.get_y() << endl;
        cout << "z before: " << p1.get_z() << endl;
	cout << endl;
        p1.shift_x(1.0);
        p1.shift_y(1.0);
        p1.shift_z(1.0);
        p1.rotate_x(90);
        p1.rotate_y(180);
        p1.rotate_z(45);
        cout << "x after: " << p1.get_x() << endl;
        cout << "y after: " << p1.get_y() << endl;
        cout << "z after: " << p1.get_z() << endl;
	cout << endl;
}
