<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LaraTest</title>
    </head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <div>
            <label for="first-name">First name:</label>
            <br><br>
            <input type="text" name="first-name">
        </div>
        <br>
        <div>
            <label for="last-name">Last name:</label>
            <br><br>
            <input type="text" name="last-name">
        </div>
        <br>
        <div>
            <label for="Gender">Gender:</label>
            <br><br>
            <input type="radio" name="male" id="male">
            <label for="male">Male</label>
            <br>
            <input type="radio" name="female" id="female">
            <label for="Gender">Female</label>
            <br>
            <input type="radio" name="other" id="other">
            <label for="Gender">Other</label>
        </div>
        <br>
        <div>
            <label for="Nation">Nationality:</label>
            <br><br>
            <select name="nation" id="nation">
                <option value="Indonesia" selected>Indonesian</option>
                <option value="Singapore">Singaporean</option>
                <option value="German">Germany</option>
            </select>
        </div>
        <br>
        <div>
            <label for="language">Language Spoken:</label>
            <br><br>
            <input type="checkbox" name="bahasa" id="bahasa">
            <label for="language">Bahasa Indonesia</label>
            <br>
            <input type="checkbox" name="english" id="english">
            <label for="language">English</label>
            <br>
            <input type="checkbox" name="other" id="other">
            <label for="language">Other</label>
        </div>
        <br>
        <div>
            <label for="bio">Bio:</label>
            <br><br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Sign Up">
    </form>


</body>

</html>