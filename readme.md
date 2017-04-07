# Beer Tracker API

The beer scene for kids today is all about trying everything — what's new, what's fun, and what's fresh. But with a growing industry, it's becoming more important than ever to remember every brew out there \(which is hard to do, especially after a few\). Beer Tracker is meant to keep track of the greats, the grosses and the beers out there left to try.

This API was built with Laravel framework, and uses the REST method — which allows you to create, post, put \(aka update\), and destroy entries from a data table via AJAX requests. The entries will be formatted as JSON data. While it may sound brew-tally awful to implement, it's anything but.

REST functions:

* Create: adds a new entry to your php data table.
* Post: allows the user to view an entry \(or all entries, depending on the request\) in their data table.
* Put: allows the user to edit an entry in their data table.
* Destroy: deletes an entry in the data table.

And while it's essential to the best of the beer nerds to track their progress, it's important to remember not to stress out about this. There's hop\(e\) for you yet. This is ale in good fun. Cheers!

#### How to run on your machine:

* Download this repository
* Download [Composer](https://getcomposer.org/doc/00-intro.md), a tool for dependency management
* * This is how Laravel will be installed on your machine
* Run MAMP application \(download [here](https://www.mamp.info/en/downloads/) if needed\)
  * In Preferences -&gt; Ports, set Apache port to 8888, Nyginx port to 8888, and MySQL port to 8889
  * In Web Server, set document root to the public folder of the repository
* Create a database named "mejo" in phpMyAdmin
* Run Laravel command: php artisan migrate
  * This will create database migrations for the tables
* Open [http://localhost:8888/](http://localhost:8888/) in your web browser
* Use an Advanced Rest Client to complete the REST functions

#### Link to my Gitbook:

https://sarahvassello.gitbooks.io/beer-tracker-api/
