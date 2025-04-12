<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog Posts - Admin Panel</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f1f4f9;
      margin: 0;
    }
    .sidebar {
      width: 240px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      background: #0d6efd;
      color: white;
      padding: 20px;
    }
    .sidebar .nav-link {
      color: white;
      margin-bottom: 10px;
    }
    .sidebar .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
    }
    .main {
      margin-left: 240px;
      padding: 30px;
    }

    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
        padding: 10px;
      }
      .main {
        margin-left: 0;
        padding: 15px;
      }
    }

    .table-responsive {
      overflow-x: auto;
    }

    .card {
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>

<?php
    include "navbar.php"
    ?>
<!-- Main Content -->
<div class="main">
  <h2 class="mb-4">Manage Blog Posts</h2>

  <!-- Add Blog Form -->
  <div class="card mb-4">
    <div class="card-header bg-primary text-white">Add New Blog Post</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" placeholder="Post Title">
        </div>
        <div class="mb-3">
          <label class="form-label">Author</label>
          <input type="text" class="form-control" placeholder="Author Name">
        </div>
        <div class="mb-3">
          <label class="form-label">Image URL</label>
          <input type="text" class="form-control" placeholder="Image Link">
        </div>
        <div class="mb-3">
          <label class="form-label">Content</label>
          <textarea class="form-control" rows="4" placeholder="Blog content..."></textarea>
        </div>
        <button class="btn btn-success">Publish</button>
      </form>
    </div>
  </div>

  <!-- Blog List Table -->
  <div class="card">
    <div class="card-header bg-dark text-white">All Blog Posts</div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Top 10 Beaches to Visit</td>
            <td>Admin</td>
            <td>2025-04-01</td>
            <td>
              <button class="btn btn-sm btn-primary">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Traveling Europe on a Budget</td>
            <td>John Doe</td>
            <td>2025-03-25</td>
            <td>
              <button class="btn btn-sm btn-primary">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
