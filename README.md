# PHP SEMESTER PROJECT

## PROJECT CONCEPT
“Comox Valley Realty Navigator” is a comprehensive online platform designed to serve as the ultimate guide for property seekers and property management professionals in the Comox Valley region of British Columbia, Canada. This innovative system empowers users to effortlessly navigate the local real estate landscape, whether they are looking to find their dream home, rent a commercial space, or manage property listings with ease.
This comprehensive real estate solution allows users to explore a wide range of property listings, including apartments, independent houses, shops, plots, and commercial land, both for rent and purchase. They can view the listings, save their favorite listings for later reference, and even book viewings.
Property management professionals can easily manage their property listings through intuitive tools that enable them to add, edit, and delete listings, ensuring that their offerings are always up-to-date and reflective of the dynamic Comox Valley real estate market. Whether you are a property seeker or a property manager, Comox Valley Realty Navigator is your go-to platform for a seamless and efficient real estate experience.

## Data model concept


The processing required for the real estate property management system involves various tasks related to user interactions, data management, and system functionality.
Here's an overview of the processing required for the key tasks in this project:

1. User Account Creation (User):
 - Processing involves collecting user-provided information during registration, such as name, email, and password.
 - Validation and verification of user data to ensure it meets security and integrity standards.
 - Storing user account information securely in the database.

2. Add to Favorites & Book Viewing (User):

- Processing involves capturing user requests to add specific property listings to their favorites.

- Associating the selected property with the user's account to create a record of favorites.

- Updating the user's favorites list in the database.
- Users initiate the booking process by clicking on a "Book Viewing" button associated with the property.
- A new booking record is created, associating it with the user's account and the specific property listing.

3.Add Listing (Admin):

- Processing includes capturing property details provided by admins, such as address, images, and property type.
- Data validation to ensure accuracy and completeness of property information.

- Securely storing the newly added property listing in the database.


4.View All Listed Items (Admin):

- Processing encompasses retrieving and displaying a comprehensive list of all property listings.

- Querying the database to fetch and organize property listing data.

- Presenting the property listings in an accessible format for admin review.
5. Edit Listing (Admin):

- Processing involves modifying and updating property listing details.

- Validating the edited information for accuracy and adherence to data standards.

- Updating the corresponding property listing in the database with the edited details.

6. Delete Listing (Admin):

- Processing includes managing admin requests to delete property listings.

- Identifying and confirming the property to be deleted.

- Removing the property listing from the database to maintain data integrity.
7. View User Bookings (Admin):

- Processing encompasses retrieving and presenting user booking data for property viewings.

- Querying the database to obtain booking information linked to specific properties.

