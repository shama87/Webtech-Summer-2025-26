<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Categories | CareerBridge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
  <aside class="sidebar">
    <div class="brand">CareerBridge</div>
    <div class="role">Admin Panel</div>
    <div class="nav"><a class="" href="dashboard.php">Dashboard</a>
<a class="active" href="categories.php">Categories</a>
<a class="" href="companies.php">Companies</a>
<a class="" href="users.php">Users</a></div>
  </aside>
  <main class="main">
    <div class="topbar">
      <strong>Job Categories</strong>
      <span>Admin</span>
    </div>
    <div class="content">
      
<div class="page-head"><div><h1>Job Categories</h1><p>Create, edit, and delete job categories.</p></div></div>
<div class="grid grid-2">
  <div class="card">
    <h3>Category List</h3>
    <div class="table-wrap"><table>
      <thead><tr><th>Category</th><th>Action</th></tr></thead>
      <tbody>
        <tr><td class="title">Web Development</td><td class="actions"><a class="btn btn-secondary btn-sm" href="#">Edit</a><a class="btn btn-danger btn-sm" href="#" data-confirm="Delete this category?">Delete</a></td></tr>
        <tr><td class="title">Software Engineering</td><td class="actions"><a class="btn btn-secondary btn-sm" href="#">Edit</a><a class="btn btn-danger btn-sm" href="#" data-confirm="Delete this category?">Delete</a></td></tr>
      </tbody>
    </table></div>
  </div>
  <div class="card">
    <h3>Add Category</h3>
    <form>
      <div class="field"><label>Category Name</label><input class="input" placeholder="Data Science"></div>
      <div class="field section-gap"><label>Description</label><textarea placeholder="Short description..."></textarea></div>
      <div class="form-actions"><button class="btn btn-primary">Save Category</button></div>
    </form>
  </div>
</div>

    </div>
  </main>
</div>
<script src="script.js"></script>
</body>
</html>
