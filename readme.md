Dog Breeds API


External API - https://dog.ceo/

Get External API and display:-

All - localhost\breed
One Breed List - localhost\breed\hound
Random Breed - localhost\breed\random
Breed Image - localhost\breed\hound\image

The data collected will save to MySql Database if not already in database.

Data is not stored in Redis. 
Never used Redis before and was unable to add it on.

Issues with the environment when setting up

Guzzlehttp
It took me a while to set up as error message displayed was composer memory issues.
After trying to update php.ini to add extra allocation which did not make any difference I then had to revert to 6.0 to make it work.

Database Issues
I am using MAMP on my local machine and had to amend database port to get it to work
