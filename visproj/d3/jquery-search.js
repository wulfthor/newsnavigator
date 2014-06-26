    $(document).ready(function(){
			var counter = 1;
        /*
         Set the inner html of the table, tell the user to enter a search term to get started.
         We could place this anywhere in the document. I chose to place it
         in the table.
        */
        $('#results').html('<p style="padding:5px;">Enter search term to start filtering.</p>');

        /* When the user enters a value such as "j" in the search box
         * we want to run the .get() function. */
        $('#searchDataEU').keyup(function() {
		$('#results').html('<p></p>');

            /* Get the value of the search input each time the keyup() method fires so we
             * can pass the value to our .get() method to retrieve the data from the database */
            var searchVal = $(this).val();

            /* If the searchVal var is NOT empty then check the database for possible results
             * else display message to user */
	    if((searchVal !== '') && ((searchVal.length) > 3)) {
	    	var mysearchtype = $("select#EUsearchtype").val();
	    	var mynumwords = $("input#numofwords").val();
	    	var returntype = $("select#EUreturn").val();
		var myArgs = '-a ' + encodeURIComponent(searchVal) + ' -t ' + ' -s ' + mysearchtype + ' -n ' + mynumwords + ' -r ' + returntype;

                /* Fire the .get() method for and pass the searchVal data to the
                 * search-data.php file for retrieval */
                //$.get('data/search-data.php?searchDataEU='+searchVal, function(returnData) {
                $.get('data/search-data.php?searchDataEU='+ myArgs, function(returnData) {
                    /* If the returnData is empty then display message to user
                     * else our returned data results in the table.  */
                    if (!returnData) {
                        $('#results').html('<p style="padding:5px;">Search term entered does not return any data.</p>');
                    } else {
		    	counter++;
                        //$('#results').html(returnData);
                        $('#results').append('<table id="table_' + counter + '">' + returnData + '</table>');
                    }
                });
            } else {
                $('#newresults').html('<p style="padding:5px;">Enter search term to start filtering.</p>');
            }

        });

        $('#searchDataSMK').keyup(function() {

            /* Get the value of the search input each time the keyup() method fires so we
             * can pass the value to our .get() method to retrieve the data from the database */
            var searchVal = $(this).val();
		$('#results').html('<p></p>');

            /* If the searchVal var is NOT empty then check the database for possible results
             * else display message to user */
    if((searchVal !== '') && ((searchVal.length) > 3)) {
	var mytag = $("select#SMKreturn").val();
	    	var mysearchtype = $("select#SMKsearchtype").val();
	    	var mynumwords = $("input#numofwords").val();
	    	var returntype = $("select#SMKreturn").val();
		var myArgs = '-a ' + encodeURIComponent(searchVal) + ' -r ' + returntype + ' -t ' + mytag + ' -s ' + mysearchtype + ' -n ' + mynumwords;


                /* Fire the .get() method for and pass the searchVal data to the
                 * search-data.php file for retrieval */
                $.get('data/search-data.php?searchDataSMK='+myArgs, function(returnData) {
                    /* If the returnData is empty then display message to user
                     * else our returned data results in the table.  */
                    if (!returnData) {
                        $('#results').html('<p style="padding:5px;">Search term entered does not return any data.</p>');
                    } else {
		    	counter++;
                        $('#results').append('<table id="table_' + counter + '">' + returnData + '</table>');
                        //$('#results').html(returnData);
                    }
                });
            } else {
                $('#results').html('<p style="padding:5px;">Enter search term to start filtering.</p>');
            }

        });

    });
