<?php
?>
<form action="process.php" method="post">
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