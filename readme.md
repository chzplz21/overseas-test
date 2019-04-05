

1) Clone the repo
     
git clone https://github.com/chzplz21/overseas-test.git

2) Create new .env file in the cloned directory. Fill in the Database and Email info with your credentials. 

3)  Create new Database with the attached .SQL file. This is necessary!!!

4) Download all packages needed. 

$ composer install 

...wait for stuff to get installed....
 
5)  No need to Migrate the DB schema, because you already should have manually imported  the .SQL file that I have attached.

6) URL: localhost/overseas-test

Everything on the site should work now. 

How To Test the Cron Job

After you have added your email credentials in the .env file, you can test the Cron Job by sending an email with the click logs to yourself . To test the Cron Job, type this in to the terminal: 

vendor/bin/phpunit --filter testLogger

What that command does is run a Unit Test which triggers the Cron Job. If you're using Gmail, you may have to generate a special access token.to be used in the MAIL_PASSWORD field in the .env file.