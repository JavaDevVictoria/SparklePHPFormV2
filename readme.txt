# SparklePHPForm v2.0
# by Victoria Holland of http://www.victoria-holland.info
# Thanks to www.thesitewizard.com for their tutorial which helped me write this script.
# GPL v3 (open source)
------------------------------------------------------

ABOUT:

This is an open source PHP script which enables your site visitors to send you an email via a feedback form.

FEATURES:

You have the ability to customise the name of the form, the title which will be on all the emails you receive via the form, and the email address to which the forms will be sent.
When someone submits a form, it is automatically sent to your specified email address, with the user's IP address and the name of their web-broswer, along with their name, site address, their email address and their message.

CHANGELOG:
Changes since version 1.0 are:
*Some minor bug fixes regarding the thankyou.php page which is displayed upon submission of the form.
*A stylesheet has now been included.

REQUIREMENTS:

You must have PHP enabled on your webserver.  Therefore, this script will not work on free servers such as Geocities, Angelfire or Freewebs, etc.

INSTALLATION INSTRUCTIONS:

1. Open config.php in a text editor such as Notepad, and change the variables where specified.  It is essential that you type in your email address correctly, as that is where all the completed feedback forms will be sent.

2.  Upload all the files to your server.  You can put them inside a folder called "feedbackform" if you wish, as long as all the files are inside the same folder.

3.  You can then add the form to an existing page in your website by using a PHP include statement.  For example, <? include('feedback.php'); ?>  This assumes your feedback-form files are in the same directory as the page where you are adding the form.  

A stylesheet has been included, and you can modify this if you wish, so that the form fits in better with the rest of your site.

Alternatively, you can use inline frames to add the form to your site, using the sample code below:  
<iframe src="feedback.php" width="400" height="500" name="inline" scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true"></iframe>

If you don't want to add the form to an existing page in your website, you can directly link to it instead, ie: www.yourdomain.com/feedback.php.

4.  Then you should test the form to make sure it is working correctly.


