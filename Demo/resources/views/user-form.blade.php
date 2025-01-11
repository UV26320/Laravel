<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .input-wrapper {
            margin-bottom: 15px;
        }
        .input-wrapper label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], select, input[type="range"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add User</h2>
        <form action="addUser" method="post">
            @csrf
            
            <!-- Text Fields -->
            <div class="input-wrapper">
                <label for="username">User Name</label>
                <input type="text" placeholder="Enter User Name" name="username" id="username">
            </div>
            <div class="input-wrapper">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter User Email" name="email" id="email">
            </div>
            <div class="input-wrapper">
                <label for="city">City</label>
                <input type="text" placeholder="Enter User City" name="city" id="city">
            </div>
            
            <!-- Checkbox -->
            <div class="input-wrapper">
                <label>Interests</label>
                <input type="checkbox" name="interests[]" value="Sports"> Sports<br>
                <input type="checkbox" name="interests[]" value="Music"> Music<br>
                <input type="checkbox" name="interests[]" value="Travel"> Travel
            </div>
            
            <!-- Radio Buttons -->
            <div class="input-wrapper">
                <label>Gender</label>
                <input type="radio" name="gender" value="Male" id="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="Female" id="female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" value="Other" id="other">
                <label for="other">Other</label>
            </div>
            
            <!-- Dropdown -->
            <div class="input-wrapper">
                <label for="country">Country</label>
                <select name="country" id="country">
                    <option value="USA">USA</option>
                    <option value="India">India</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
            
            <!-- Range -->
            <div class="input-wrapper">
                <label for="age">Age Range</label>
                <input type="range" name="age" id="age" min="18" max="60">
            </div>
            
            <!-- Submit Button -->
            <div class="input-wrapper">
                <button type="submit">Add New User</button>
            </div>
        </form>
    </div>
</body>
</html>
