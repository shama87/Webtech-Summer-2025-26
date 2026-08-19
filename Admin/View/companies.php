<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Companies | CareerBridge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
  <aside class="sidebar">
    <div class="brand">CareerBridge</div>
    <div class="role">Admin Panel</div>
    <div class="nav"><a class="" href="dashboard.php">Dashboard</a>
<a class="" href="categories.php">Categories</a>
<a class="active" href="companies.php">Companies</a>
<a class="" href="users.php">Users</a></div>
  </aside>
  <main class="main">
    <div class="topbar">
      <strong>Companies</strong>
      <span>Admin</span>
    </div>
    <div class="content">
      
<div class="page-head"><div><h1>Companies</h1><p>Review and approve employer company profiles.</p></div></div>
<div class="card">
  <div class="table-wrap"><table>
    <thead><tr><th>Company</th><th>Industry</th><th>Status</th><th>Action</th></tr></thead>
    <tbody>
      <tr><td class="title">ByteNest Ltd.</td><td>Software</td><td><span class="badge pending">Pending</span></td><td class="actions"><a class="btn btn-success btn-sm" href="#" data-confirm="Approve company?">Approve</a><a class="btn btn-danger btn-sm" href="#" data-confirm="Reject company?">Reject</a></td></tr>
      <tr><td class="title">Orbit Soft</td><td>Software</td><td><span class="badge approved">Approved</span></td><td><a class="btn btn-secondary btn-sm" href="#">View</a></td></tr>
    </tbody>
  </table></div>
</div>

    </div>
  </main>
</div>
<script src="script.js"></script>
</body>
</html>
