<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management App</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex; /* This puts sidebar and content side by side */
            height: 100vh;
        }
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding-top: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            font-size: 18px;
            border-bottom: 1px solid #34495e;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        /* Main Content Styling */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f4f6f9;
            overflow-y: auto;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>School App</h2>
        <a href="{{ route('students.index') }}">👨‍🎓 Student Module</a>
        <a href="{{ route('teachers.index') }}">👨‍🏫 Teacher Module</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- This is where your page content will load -->
        @yield('content')
    </div>

</body>
</html>
