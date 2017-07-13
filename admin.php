<!DOCTYPE html>
<html>
    <body style="background-color:rgb(144,144,144);">
        <div style="margin-left:30%;margin-top:10%;margin-right:30%;background-color:bisque;height:35;">
        <form action="admin_db.php" method="post" style="margin-left:20%"><br>
            <br>
        Branch : <select name="branch">
            <option>CSE</option>
            <option>IT</option>
            <option>CIVIL</option>
            <option>ELECTRICAL</option>
            <option>MECHANICAL</option>
            <option>ELECTRONICS</option>
        </select>
            <br>
        <p>Pointer : <input type="number" step="0.01" max="10" min="0" name="ptr"></p><br>
        <input style="align:center;margin-left:35%" type="submit" name=submit value=Submit>
            <br>
        </form>
        </div>
        <h1 style="text-align:center">Get a job!!!</h1>
    </body>
</html>