code_igniter_ajax
=================

incorporating AJAX into code igniter basic notes app

a simple ''posts page'' where users can post notes and have those notes immediately appear on the page.

make sure that you build this form without Ajax first. In other words, make sure the form is posted to say '/notes/create' and make sure '/notes/create' adds a new record in the database and return in jSON format the results.
make sure that you're storing these information in the database (create a table called 'posts' with 'id', 'description', 'created_at', and 'updated_at').
once '/notes/create' is all working perfectly (adding new records to the database and outputting the right jSON data), then turn Ajax on and make sure it's working now with Ajax.
