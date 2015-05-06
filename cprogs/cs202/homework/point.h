// FILE: point.h
// CLASS IMPLEMENTED: point (See document.h for documentation.)

#ifndef MAIN_SKITCH_POINT_H   
#define MAIN_SKITCH_POINT_H  
#include <iostream>

namespace main_skitch_1A
{          
    class point
    {
    public:
        // CONSTRUCTOR
        point(double initial_x = 0.0, double initial_y = 0.0, double initial_z = 0.0);
        // MODIFICATION MEMBER FUNCTIONS
        void shift_x(double x_amount);
        void shift_y(double y_amount);
        void shift_z(double z_amount);   
	void rotate_x(double a_amount);
        void rotate_y(double a_amount);
	void rotate_z(double a_amount);
        // CONSTANT MEMBER FUNCTIONS
        double get_x( ) const { return x; } 
        double get_y( ) const { return y; }
	double get_z( ) const { return z; }
    private:
        double x, y, z, a; // x, y and z coordinates of this point
    };
}
#endif 
