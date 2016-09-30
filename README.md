
# PHP Sample for Alexa Top Sites                  

This is just a wrapper program over the original Alexa Top Sites class provided 
on Amazon/Alexa sites.

This program will enable a developer/user to specify start and end rank while downloading the Top Sties, 
which was not available in the original class. 
Additionally, this program will help one to find code on git. 

##Usage

###format
```shell
php src/cli.php ACCESS_KEY_ID SECRET_ACCESS_KEY [COUNTRY_CODE] [FROM] [TO]
```
###example
```shell
#for downloading top websites in India having Alexa ranks between 500 to 2000
php src/cli.php YOUR_AWS_ACCESS_KEY_ID YOUR_AWS_SECRET_ACCESS_KEY IN 500 2000

#the data will be stored inside src/topsites.txt
tail src/topsites.txt
```

#below is original README of Alexa Top Sites
This sample will make a request to the Alexa Top Sites web service 
using your Access Key ID and Secret Access Key.

Tested with PHP 5.3.2.

Steps:
1. Sign up for an Amazon Web Services account at http://aws.amazon.com
   (Note that you must have a valid credit card)
2. Get your Access Key ID and Secret Access Key
3. Sign up for Alexa Top Sites at http://aws.amazon.com/alexatopsites
4. Uncompress the zip file into a working directory
5. Run

    php topsites.php ACCESS_KEY_ID SECRET_ACCESS_KEY [COUNTRY_CODE]

Country code is optional.

If you are getting "Not Authorized" messages, you probably have one of the
following problems:

1. Your access key or secret key were not entered properly.  Please re-check
that they are correct.

2. You did not sign up for Alexa Top Sites at
http://aws.amazon.com/alexatopsites (This step is separate from signing 
up for Amazon Web Services.)

3. Your credit card was not valid.

If you are getting "Request Expired" messages, please check that the date 
and time are properly set on your computer.
