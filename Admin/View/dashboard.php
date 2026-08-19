<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | CareerBridge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
  <aside class="sidebar">
    <div class="brand">CareerBridge</div>
    <div class="role">Admin Panel</div>
    <div class="nav"><a class="active" href="dashboard.php">Dashboard</a>
<a class="" href="categories.php">Categories</a>
<a class="" href="companies.php">Companies</a>
<a class="" href="users.php">Users</a></div>
  </aside>
  <main class="main">
    <div class="topbar">
      <strong>Admin Dashboard</strong>
      <span>Admin</span>
    </div>
    <div class="content">
      
<div class="page-head"><div><h1>Admin Dashboard</h1><p>Overview of users, companies, and job data.</p></div></div>
<div class="grid grid-4">
  <div class="card stat"><div class="label">Users</div><div class="value">128</div></div>
  <div class="card stat"><div class="label">Companies</div><div class="value">18</div></div>
  <div class="card stat"><div class="label">Jobs</div><div class="value">42</div></div>
  <div class="card stat"><div class="label">Pending Companies</div><div class="value">3</div></div>
</div>
<div class="card section-gap">
  <h3>Pending Company Approvals</h3>
  <div class="table-wrap"><table>
    <thead><tr><th>Company</th><th>Industry</th><th>Status</th></tr></thead>
    <tbody>
      <tr><td class="title">ByteNest Ltd.</td><td>Software</td><td><span class="badge pending">Pending</span></td></tr>
      <tr><td class="title">Urban Retail</td><td>E-commerce</td><td><span class="badge pending">Pending</span></td></tr>
    </tbody>
  </table></div>
</div>

    </div>
  </main>
</div>
<script src="script.js"></script>
</body>
</html>
