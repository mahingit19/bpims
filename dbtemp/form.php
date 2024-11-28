<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Roll</td>
                <td>:</td>
                <td><input type="text" name="roll"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td>:</td>
                <td>
                    <select name="dept" id="">
                        <option value="" disabled selected>Select Technology:</option>
                        <option value="Computer">Computer</option>
                        <option value="Civil">Civil</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Power">Power</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronics">Electronics</option>
                        <option value="RAC">RAC</option>
                        <option value="Mining">Mining</option>
                        <option value="Tourism">Tourism</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Register</td>
                <td>:</td>
                <td><input type="text" name="reg"></td>
            </tr>
            <tr>
                <td>Session</td>
                <td>:</td>
                <td><input type="text" name="ses"></td>
            </tr>
            <tr>
                <td>Shift</td>
                <td>:</td>
                <td>
                    <select name="shift" id="">
                        <option value="" disabled selected>Select shift:</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Blood</td>
                <td>:</td>
                <td>
                    <select name="blood" id="">
                        <option value="" disabled selected>Select blood:</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td><input type="text" name="pos"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>P.I.M.S.</td>
                <td>:</td>
                <td><input type="text" name="pims"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td>
                    <textarea name="msg" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>type</td>
                <td>:</td>
                <td>
                    <select name="type" id="">
                        <option value="" disabled selected>Select type:</option>
                        <option value="Routine">Routine</option>
                        <option value="Fee">Fee</option>
                        <option value="Result">Result</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status" id="">
                        <option value="" selected disabled>Select status:</option>
                        <option value="Allowed">Allowed</option>
                        <option value="Blocked">Blocked</option>
                        <option value="Pending">Pending</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Photo</td>
                <td>:</td>
                <td><input type="file" name="photo" id=""></td>
            </tr>
            <tr>
                <td>Upload File</td>
                <td>:</td>
                <td><input type="file" name="file" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>