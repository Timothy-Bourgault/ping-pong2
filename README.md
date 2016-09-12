# _{ping-pong}_

#### _{Lists numbers making exeptions for divisibles of 3 and 5}, {9.12.2016}_

#### By _**{Tim Bourgault and Seth Kendall}**_

## Description
    _A program that generates a list of numbers making "ping," "pong" and "pingpong" insertions for numbers divisible by 3, 5 and 15 respectively._

## Specifications

|Behavior|Input|Output|
|--------|:---:|-----:|
|generates a list of sequential integers up to a specified number|"2"|"1, 2"|
|inserts the word "ping" in place of numbers divisible by 3|"3"|"1,2,ping"|
|inserts the word "pong" in place of numbers divisible by 5|"5"|"1,2,ping,4,pong"|
|inserts the word "pingpong" in place of numbers divisible by 15|"15"|"1,2,ping,4,pong,ping,7,8,ping,pong,11,ping,13,14,pingpong"|

## Setup/Installation Requirements

* _Clone the program from its github repository_
* _Navigate to the project directory in a command line software._
* _Type: "cd web" to move into the "web" folder._
* _Type: "php -S localhost:8000" to create a local server for the project_
* _Open the browser of your choice and type in this URL to load the project: "localhost:8000"_

## Support and contact details

_{If any issues arise, please contact the Tim Bourgault @ tim.bourgault@gmail.com}_

## Technologies Used

_{PHP, Silex, Twig, bootstrap and composer}_

### License

*{Open Source}*

Copyright (c) 2016 **_{Tim Bourgault and Seth Kendall}_**
