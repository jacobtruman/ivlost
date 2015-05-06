			<%
			if (htype = "Holiday Inn Express") then
				flink = "Holiday Inn"
			elseif (htype = "Fairfield Inn") then
				flink = "Marriott Hotels"
			elseif (htype = "Sheraton Four Points") then
				flink = "Starwood Hotels"
			elseif (htype = "Walnut Knolls") then
				flink = htype
			else
				flink = htype&" HSIA"
			end if
			%>