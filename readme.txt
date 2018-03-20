There are two main files involved.

test.html - which is of course the main html file.  It displays the map background 
and overlays on top of that a read square in whatever position it returned 
to it from the php script "send_sse.php"

and

send_sse.php - this script connects to the mysql database "location" and 
grabs the most current wifi BSSID entry
put there by the MQTT server - checks down a list for a match - and then 
sends back a little css code snipit which
determins the placement of the red square on the map.

NOTES:

I know very little about some of the magic that the code in these files conjours - but I was surprised
that there wsa no 'loop' in there anywhere to keep the html page updating.
I didn't even find a timer.  One person commented on the page that I got the AJAX code 
from that there is sort of a natural timer built into the AJAX part because the 
fetching of the data times out and it re-tries constantly - so it appears to be 
always updating.  One person insisted that it was implemtned wrong and that there
should be some sort of WAIT time in there to control it... but the original 
author didn't realy care.  Not sure that I do either.  It seems to work well.

 
