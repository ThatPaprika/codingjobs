<?php

/*
	    -- PAGINATION --
	    To use pagination we'll use LIMIT and OFFSET in SQL
	    
        This query will select only the 30 first records : SELECT * FROM Orders LIMIT 30;
		
        We can also get 30 records, starting from the 31 :
	    SELECT * FROM Orders LIMIT 30 OFFSET 31;
		(The SQL query below says "return only 30 records, start on record 31 (OFFSET 31)")
		
        Other syntax, faster :
	    SELECT * FROM Orders LIMIT 31, 30;
	   	
        To use pagination you should use either URI Params or AJAX.
	*/