# Basic system to implement CRUD
by using php, html, mysql, javascript also extra deco using bootstrap and css.

**CRUD** - create, retrieve, update, delete

1. Active xampp
2. Upload this folder inside 'htdocs' folder
3. Go to phpmy admmin to import 'library.sql' file
4. Happy trying!

- connect with database
  - connect.php
- create
  - index.php
- retrieve with search (all data using php)
  - member_view.php
- update and delete
  - member_update.php
  - update.php
  
  __Login not required!
  
## Example and details for every file
1.	home.html 
  - Rgistration button: index.php, member_view.php
  - For Admin User: member_update.php,  update.php
2.	index.php (Add button)
  - fill in registration form
  - Notify the user that the registration form successfully added in database
3. member_view.php (Retrieve, Search button)
  - Display all information that user wants to get, for example the user wants to know members from ‘Belgium’.   
  - Another example is to find ‘Anuar’ in last name
4. update.php (Update Button-user entering icon update in action row at member_update.php) Notify Alert to user that data successfully updated which pop up after the user click Update Button.        
5. member_update.php 
  - Date of Birth ‘naurah’ had changed from ‘17-001-1998’ to ‘17-001-1999’. Also,change the library section check box from ‘all’ to ‘magazine,nonfiction,terror’
  - Delete confirmation pop out in screen once the user click Delete Button
  - Notify to the user that data was deleted.
  - ‘naurah’ been deleted from list and will never display in list.
