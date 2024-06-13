## Description:
This PHP project is an object-oriented program designed to manage different transport methods for a travel agency. The system includes classes for general transport and specific types of transport like autocar. It demonstrates inheritance, method overriding, and abstract classes in PHP.

## Features
Abstract Transport class with attributes for ID, speed, and capacity.
infos method to display transport information.
amount method to calculate the total amount if all seats are occupied.
Autocar class extending Transport, with additional attributes for brand and ticket price.
Overridden infos method to display all details of an autocar.
Implemented amount method to return the total amount if all tickets are sold.
