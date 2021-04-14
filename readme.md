<h1>Dog Breeds API</h1>

<h4>External API</h4> - https://dog.ceo/

<h3>Get External API and display:-</h3>

<li>All - localhost\breed</li>
<li>One Breed List - localhost\breed\hound</li>
<li>Random Breed - localhost\breed\random</li>
<li>Breed Image - localhost\breed\hound\image</li>
<br /><br />
<p>The data collected will save to MySql Database if not already in database.</p>

<h3>Data is not stored in Redis. </h3>
<p>Never used Redis before and was unable to add it on.</p>

<h2>Issues with the environment when setting up</h2>

<h3>Guzzlehttp</h3>
<p>It took me a while to set up as error message displayed was composer memory issues.
After trying to update php.ini to add extra allocation which did not make any difference I then had to revert to 6.0 to make it work.</p>

<h3>Database Issues</h3>
<p>I am using MAMP on my local machine and had to amend database port to get it to work</p>
