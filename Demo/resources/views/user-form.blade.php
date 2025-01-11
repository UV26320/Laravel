<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        div {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Input Wrapper */
        .input-wrapper {
            margin-bottom: 15px;
        }

        /* Input Fields */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Button Styles */
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
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
    <div>
        <h2>Add User</h2>
        <form action="addUser" method="post">
            @csrf
            <div class="input-wrapper">
                <input type="text" placeholder="Enter User Name" name="username">
            </div>
            <div class="input-wrapper">
                <input type="text" placeholder="Enter User Email" name="email">
            </div>
            <div class="input-wrapper">
                <input type="text" placeholder="Enter User City" name="city">
            </div>
            <div class="input-wrapper">
                <button type="submit">Add New User</button>
            </div>
        </form>
    </div>
</body>
</html>
