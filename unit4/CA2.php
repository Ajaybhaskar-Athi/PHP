<?php
session_start();

?>

<body>

    <form action="action.php" method="POST">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="website">Website : </label>
        <input type="text" name="website" id="website">
        <br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" placeholder="Write your content here..."></textarea><br><br>
        <br>
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

</body>