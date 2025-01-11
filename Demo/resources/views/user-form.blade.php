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
        <label for="username">User Name <span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter User Name" name="username" id="username" value="{{ old('username') }}">
        @error('username')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-wrapper">
        <label for="email">Email <span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter User Email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-wrapper">
        <label for="city">City <span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter User City" name="city" id="city" value="{{ old('city') }}">
        @error('city')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Checkbox -->
    <div class="input-wrapper">
        <label>Interests</label>
        <span style="font-size: 12px; color: gray;">(Select one or more)</span><br>
        <input type="checkbox" name="interests[]" value="Sports" {{ is_array(old('interests')) && in_array('Sports', old('interests')) ? 'checked' : '' }}> Sports<br>
        <input type="checkbox" name="interests[]" value="Music" {{ is_array(old('interests')) && in_array('Music', old('interests')) ? 'checked' : '' }}> Music<br>
        <input type="checkbox" name="interests[]" value="Travel" {{ is_array(old('interests')) && in_array('Travel', old('interests')) ? 'checked' : '' }}> Travel<br>
    </div>

    <!-- Radio Buttons -->
    <div class="input-wrapper">
        <label>Gender <span style="color: red;">*</span></label><br>
        <input type="radio" name="gender" value="Male" id="male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female" id="female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
        <label for="female">Female</label><br>
        <input type="radio" name="gender" value="Other" id="other" {{ old('gender') == 'Other' ? 'checked' : '' }}>
        <label for="other">Other</label>
        @error('gender')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Dropdown -->
    <div class="input-wrapper">
        <label for="country">Country <span style="color: red;">*</span></label>
        <select name="country" id="country">
            <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
            <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
            <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
        </select>
        @error('country')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Range -->
    <div class="input-wrapper">
        <label for="age">Age Range <span style="color: red;">*</span></label>
        <input type="range" name="age" id="age" min="18" max="60" value="{{ old('age', 39) }}" oninput="this.nextElementSibling.value = this.value;">
        <output style="font-weight: bold; color: #333;">{{ old('age', 39) }}</output>
        @error('age')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="input-wrapper">
        <button type="submit">Add New User</button>
    </div>
</form>

    </div>
</body>
</html>
