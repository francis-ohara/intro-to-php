
    <form action="" method="post">
        <fieldset>
            <label for="search-type">Search Type</label>
            <select id="search-type" name="search-type">
                <option value="one">One<option>
                <option value="two">Two</option>
                <option value="three">Three</option>
            </select>
            <br><br>
            <label for="search-term">Search Term</label>
            <input type="text" id="search-term" name="search-term">
            <button type="submit">Submit</button>
        </fieldset>
    </form>

<?php
// if button pressed, this error message, if button pressed, that error message, if button pressed, this other error message.

// isset() used to test values of buttons pressed, and perform action