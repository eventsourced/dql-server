# DQL-Server
A server side application that can receive and process Domain Query Language (DQL) statements, leading to a fully working, event-sourced, domain.

## Status
This project is still in development. This document will be updated as development progresses.

For a more in depth understanding of the current state of the project, have a look at the open and closed Github issues.

## Development Installation
To install DQL-Server for development, you need to follow the following steps:
- Copy "Homestead.template.yaml" to "Homestead.yaml"
- Add the missing fields to "Homestead.yaml" 
  - [IP Address that you want] should be come the IP address you want your VM to use, eg "192.168.10.22"
  - [Path/to/your/DQL/install] should be the folder path to the root dir of this repo, on your local machine
- Run "composer install" from the commandline in the root of this project
- Run "vagrant up"
- Add an entry to your hosts file ("/etc/hosts") point the url "dql-server.app" at the IP address you mentioned above
- Go to http://dql-server.app/server-test.php to test that it's working
- Grand a coffee/tea/beer, you're done
