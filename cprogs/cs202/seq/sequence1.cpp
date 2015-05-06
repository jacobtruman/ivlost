// FILE: sequence1.cpp
// CLASS IMPLEMENTED: sequence (see sequence1.h for documentation)
// INVARIANT for the bag class:
//   1. The number of items in the bag is in the member variable used;
//   2. For an empty bag, we do not care what is stored in any of data; for a
//      non-empty bag the items in the bag are stored in data[0] through
//      data[used-1], and we don't care what's in the rest of data.

#include <algorithm> // Provides copy function
#include <cassert>   // Provides assert function
#include "sequence1.h"
using namespace std;

namespace main_skitch_5
{
	const sequence::size_type sequence::CAPACITY;

	void sequence::start()
		{
			data[current_index] = 0;
		}
	void sequence::advance()
                {
                        data[current_index] = 0;
                }
	void sequence::insert(const value_type& entry)
	{
		assert(size( ) < CAPACITY);
		data[used] = entry;
		++used;
	}
        void sequence::attach(const value_type& entry)
        {
                assert(size( ) < CAPACITY);
                data[used] = entry;
                ++used;
        }
        void sequence::remove_current()
                {
                        data[current_index] = 0;
                }
        bool sequence::is_item() const
                {
			if (current_index > used){
				return false;
			}else{
				return true;
			}
                }
        sequence::size_type sequence::size( ) const
		{
			return used;
		}
        sequence::value_type sequence::current( ) const 
		{
			return current_index;
		}
}
