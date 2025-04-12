<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Categories - Admin Panel</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      background-color: #f1f4f9;
    }
    .sidebar {
      height: 100vh;
      background-color: #0d6efd;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 240px;
      padding: 20px;
    }
    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      margin-bottom: 10px;
    }
    .sidebar .nav-link:hover {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
    }
    .main-content {
      margin-left: 240px;
      padding: 30px;
    }
    .card {
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
    <?php
    include "navbar.php"
    ?>
 

  <!-- Main Content -->
  <div class="main-content">
    <h2 class="mb-4">Manage Categories</h2>

    <!-- Add Category Form -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Add New Category</h5>
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label for="categoryName" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="categoryName" placeholder="e.g., Beaches, Mountains">
            </div>
            <div class="col-md-6">
              <label for="categoryIcon" class="form-label">Icon (optional)</label>
              <input type="text" class="form-control" id="categoryIcon" placeholder="e.g., 🌊, 🏔️">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
      </div>
    </div>

    <!-- Category List Table -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Existing Categories</h5>
        <table class="table table-striped mt-3">
          <thead>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Icon</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Beaches</td>
              <td>🌊</td>
              <td>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mountains</td>
              <td>🏔️</td>
              <td>
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </td>
            </tr>
            <!-- Add more category rows dynamically -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
