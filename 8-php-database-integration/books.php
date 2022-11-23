
<form action="details.php">
    <fieldset>
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        <br>
        <br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="author">Author</label>
        <input type="text" id="author" name="author">
        <br>
        <br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address">
        <br>
        <br>
        <button type="button">Save</button>
        <button>Delete</button>
        <button>Update</button>
        <button>Search</button>
    </fieldset>
</form>

<?php
/* Database integration will be with mysql
 * Research strengths of mysql
*/

/* STEPS - in chapter 11 of book
    1. Create your database
    2. Create your tables
    3. Create your form
    4. Establish connection
        - server, username, password, password, database
    5. Create, prepare, and bind query
    6. Execute query
    7. Close connection
 * */

/* Brief input validation
 * Database Design
 * CRUD Operation on Databases
 * Create Record
 * Reading Record
 * Updating Record
 * Deleting Record
*/
?>