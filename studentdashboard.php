<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }
    .sidebar {
      width: 200px;
      background: #2c3e50;
      color: white;
      height: 100vh;
      padding: 20px;
    }
    .sidebar h2 {
      text-align: center;
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar ul li {
      margin: 20px 0;
      cursor: pointer;
    }
    .main {
      flex: 1;
      padding: 20px;
    }
    .card {
      background: #ecf0f1;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 8px;
    }
    .card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h1>dashboard</h1>
    <ul>
      <li onclick="showSection('grades')">Grades</li>
      <li onclick="showSection('assignments')">Assignments</li>
      <li onclick="showSection('announcements')">Announcements</li>
    </ul>
  </div>

  <div class="main">
    <div id="grades" class="card">
      <h3>Grades</h3>
      <p>Math: A</p>
      <p>Science: B+</p>
    </div>

    <div id="assignments" class="card" style="display: none;">
      <h3>Assignments</h3>
      <p>Math Homework - Due Friday</p>
      <p>Science Project - Due Next Week</p>
    </div>

    <div id="announcements" class="card" style="display: none;">
      <h3>Announcements</h3>
      <p>School closed on Monday for holiday.</p>
    </div>
  </div>

  <script>
    function showSection(sectionId) {
      const sections = ['grades', 'assignments', 'announcements'];
      sections.forEach(id => {
        document.getElementById(id).style.display = (id === sectionId) ? 'block' : 'none';
      });
    }
  </script>

</body>
</html>
