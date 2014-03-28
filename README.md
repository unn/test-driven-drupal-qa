This starterkit is intended to expedite the process setting up automated testing for new projects.

### Setup

* Run the following commands:
````
composer self-update
composer install
cp tests/behat/default.local.yml tests/behat/local.yml
````

For Mac OSX:
````
brew install chromedriver
brew install selenium-server-standalone
java -jar /usr/local/opt/selenium-server-standalone/selenium-server-standalone-2.39.0.jar
````

* Update local.yml with your local credentials.
* Execute example behat test:
````
./vendor/bin/behat -c tests/behat/local.yml tests/behat/features/HomePage.feature
````

### To dos

* Include instructions for configuring Jenkins to run included build.xml file
