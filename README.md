newsnavigator
=============
Pre-requisites are MongoDB and an apache webserver.

The newsnavigator is right now a static seen from the frontend.
It is dynmaic however seen from the backend and the workflow is shown in cmd1, cmd2 and cmd3

cmd1 - from the Guardian to local DB
./bin/newGuardian.py -s "maria miller" -c 10 -m "searcht" -i "article" -w "100"
The options are just ways to address options in the search-facilities as shown on the Guardian API site
and are straight forward with "-m" as exception. It's the method and just leave the default as "searcht"

cmd2 and cmd3 - from local DB to frontend
cmd2 shows how to call a shell-script with the search-term as argument which in turn calls the database
result is put in a json-file almost ready for the frontend-framework (Timeline.js).


