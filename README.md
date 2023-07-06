# Technological Platforms

Technological Platforms is a web application that allows users to perform CRUD operations on five entities: Platforms, Directors, Actors, Languages, and Series. The application follows the MVC (Model-View-Controller) architectural pattern and is built using PHP for the backend and HTML for the frontend. It utilizes a MySQL database managed through phpMyAdmin and is hosted on the MAMP server.

## Features

- **Homepage** (`index.php`): The homepage displays a header image and five cards, each representing one entity. Clicking on a card takes the user to a dedicated CRUD page for that entity.

- **Platforms**: CRUD functionality for managing platforms. Users can create, update, and delete platforms. The initial view lists all available platforms, and in case of no data, a placeholder image is displayed.

- **Directors**: CRUD functionality for managing directors. Users can create, update, and delete directors. The dedicated CRUD page provides the necessary forms and options.

- **Actors**: CRUD functionality for managing actors. Users can create, update, and delete actors. The dedicated CRUD page provides the necessary forms and options.

- **Languages**: CRUD functionality for managing languages. Users can create, update, and delete languages. The dedicated CRUD page provides the necessary forms and options.

- **Series**: CRUD functionality for managing series. Users can create, update, and delete series. The dedicated CRUD page provides the necessary forms and options. Additionally, the series table has many-to-many relationships with the other entities mentioned above, allowing users to update these relationships.

## Folder Structure

The project follows the MVC pattern and has the following folder structure:

- `models`: Contains the model classes responsible for interacting with the database and performing CRUD operations.

- `views`: Contains the view files responsible for rendering the HTML templates and presenting the data to the users.

- `controllers`: Contains the controller files responsible for handling user requests, interacting with the models, and returning appropriate responses.

- `images`: Contains the images used in the application, including the placeholder image for when there is no data available.

## Installation

To run the project locally, follow these steps:

1. Clone the repository: `git clone https://github.com/CuencaOscar/Technological-Platforms.git`.
2. Install and configure MAMP or a similar local server environment.
3. Start the local server and configure the document root to point to the project folder.
4. Import the MySQL database schema provided in the project to phpMyAdmin.
5. Update the database connection settings in the project files (`models`, `views`, `controllers`) to match your local database configuration.
6. Access the application through the defined local server URL in a web browser.

## Dependencies

The project has the following dependencies:

- [PHP](https://www.php.net/) (version 8.2.7)
- [MySQL](https://www.mysql.com/)
- [phpMyAdmin](https://www.phpmyadmin.net/)
- [MAMP](https://www.mamp.info/) (version 5.0.5) (or similar local server environment)

## Screenshots

Here are some screenshots of the application:

1. **Homepage**: ![Homepage](path/to/homepage-screenshot.png)
   *Brief description or context of the screenshot.*

2. **Platforms CRUD**: ![Platforms CRUD](path/to/platforms-crud-screenshot.png)
   *Brief description or context of the screenshot.*

3. **Directors CRUD**: ![Directors CRUD](path/to/directors-crud-screenshot.png)
   *Brief description or context of the screenshot.*

4. **Actors CRUD**: ![Actors CRUD](path/to/actors-crud-screenshot.png)
   *Brief description or context of the screenshot.*

5. **Languages CRUD**: ![Languages CRUD](path/to/languages-crud-screenshot.png)
   *Brief description or context of the screenshot.*

6. **Series CRUD**: ![Series CRUD](path/to/series-crud-screenshot.png)
   *Brief description or context of the screenshot.*


## License

This project is licensed under the GNU General Public License (GPL). You can find the full text of the license in the [LICENSE](LICENSE) file.


## Acknowledgements

This project makes use of the following libraries and frameworks:

- [jQuery](https://jquery.com/)
- [Popper.js](https://popper.js.org/)
- [Bootstrap](https://getbootstrap.com/)
- [Sortable.js](https://github.com/SortableJS/Sortable)

We would like to express our gratitude to the creators and maintainers of these libraries for their valuable contributions to the project.


## Contact

For any inquiries or feedback, please contact **Cuenca Oscar** at ocuencamoreno@gmail.com.

