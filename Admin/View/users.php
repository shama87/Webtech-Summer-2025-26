<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management | CareerBridge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
  <aside class="sidebar">
    <div class="brand">CareerBridge</div>
    <div class="role">Admin Panel</div>
    <div class="nav"><a class="" href="dashboard.php">Dashboard</a>
<a class="" href="categories.php">Categories</a>
<a class="" href="companies.php">Companies</a>
<a class="active" href="users.php">Users</a></div>
  </aside>
  <main class="main">
    <div class="topbar">
      <strong>User Management</strong>
      <span>Admin</span>
    </div>
    <div class="content">
      
<div class="page-head"><div><h1>User Management</h1><p>View registered users and manage account status.</p></div></div>
<div class="card">
  <div class="table-wrap"><table>
    <thead><tr><th>User</th><th>Role</th><th>Email</th><th>Status</th><th>Action</th></tr></thead>
    <tbody>
      <tr><td class="title">Shama Zerin</td><td>Student</td><td>shama@example.com</td><td><span class="badge active">Active</span></td><td><a class="btn btn-danger btn-sm" href="#" data-confirm="Block user?">Block</a></td></tr>
      <tr><td class="title">Nabila Nowshin</td><td>Mentor</td><td>nabila@example.com</td><td><span class="badge blocked">Blocked</span></td><td><a class="btn btn-success btn-sm" href="#" data-confirm="Activate user?">Activate</a></td></tr>
    </tbody>
  </table></div>
</div>

    </div>
  </main>
</div>
<script src="script.js"></script>
</body>
</html>
