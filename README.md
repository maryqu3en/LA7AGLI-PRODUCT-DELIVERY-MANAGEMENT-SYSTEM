# LA7AGLI - Product Delivery Management System
LA7AGLI is a product delivery management system that helps you manage your product deliveries and clients. It is a web application that allows you to add, edit, and delete clients and deliveries. You can also view the list of deliveries and clients, and search for specific clients by name and for deliveries by date. The system is designed to be user-friendly and easy to use, with a simple and intuitive interface.

## Features:
- User registration and login.
- Add a new client to the system.
- Add a new delivery to the system.
- View all clients in the system.
- View all deliveries in the system.
- View all deliveries made by a specific client.
- Search for a specific client by their first name or last name.
- Search for deliveries based on the delivery date.
- Update a client's information.
- Update a delivery's information.
- Delete a client from the system.
- Delete a delivery from the system.

## Technologies used:
- HTML/CSS for frontend development.
- PHP for backend development.
- MySQL database for data storage.

## Database schema:
The database `Livraison` schema consists of the following tables:
1. `user` table that stores user information such as username, password, and email.
2. `client` table that stores client information such as first name, last name, address, and phone number. It has a foreign key relationship with the `users` table.
3. `commande` table that stores delivery information such as delivery date, client name, quantity, price, and total price. It has a foreign key relationship with the `client` table and the `user` table.

![Database Entity Diagram](./assets/bd-entity-diagram.png)

