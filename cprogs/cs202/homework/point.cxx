// FILE: point.cxx
// CLASS IMPLEMENTED: point (See document.txt for documentation.)

#include <iostream>
#include <math.h>
#include "point.h"
using namespace std;

#define PI 3.14159265

namespace main_skitch_1A
{
    point::point(double initial_x, double initial_y, double initial_z)
    {
	x = initial_x;   // Constructor sets point to a given position
	y = initial_y;
	z = initial_z;
	a = 0.0;
    }

    void point::shift_x(double x_amount)
    {
        x += x_amount;
    }

    void point::shift_y(double y_amount)
    {
        y += y_amount;
    }

    void point::shift_z(double z_amount)
    {
        z += z_amount;
    }
    void point::rotate_x(double a_amount)
    {
        double new_y;
        double new_z;

        new_y = (y * cos(a_amount * PI / 180)) - (z * sin(a_amount * PI / 180));
        new_z = (y * sin(a_amount * PI / 180)) + (z * cos(a_amount * PI / 180));
        y = new_y;
        z = new_z;
    }

    void point::rotate_y(double a_amount)
    {
        double new_x;
        double new_z;

        new_x = (x * cos(a_amount * PI / 180)) + (z * sin(a_amount * PI / 180));
        new_z = (-x * sin(a_amount * PI / 180)) + (z * cos(a_amount * PI / 180));
        x = new_x;
        z = new_z;
    }

    void point::rotate_z(double a_amount)
    {
        double new_x;
        double new_y;

        new_x = (x * cos(a_amount * PI / 180)) - (y * sin(a_amount * PI / 180));
        new_y = (x * sin(a_amount * PI / 180)) + (y * cos(a_amount * PI / 180));
        x = new_x;
        y = new_y;
    }
}
    
