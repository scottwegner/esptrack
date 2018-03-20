There are two main files involved.

test.html - which is of course the main html file.  It displays the map background and overlays on top of that
a read square in whatever position it returned to it from the php script "send_sse.php"


and

send_sse.php - this script connects to the mysql database "location" and grabs the most current wifi BSSID entry
put there by the MQTT server - checks down a list for a match - and then sends back a little css code snipit which
determins the placement of the red square on the map.

NOTES:


