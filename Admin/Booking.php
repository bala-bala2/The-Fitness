<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bookings - Admin Panel</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f1f4f9;
      margin: 0;
    }
    .sidebar {
      width: 240px;
      position: fixed;
      height: 100%;
      background: #0d6efd;
      color: white;
      padding: 20px;
      top: 0;
      left: 0;
      z-index: 1000;
    }
    .sidebar .nav-link {
      color: white;
      margin-bottom: 10px;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    }
    .main {
      margin-left: 240px;
      padding: 30px;
    }
    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
        transition: 0.3s ease;
      }
      .sidebar.active {
        transform: translateX(0);
      }
      .main {
        margin-left: 0;
        padding: 20px;
      }
      .menu-toggle {
        display: block;
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 1100;
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
      }
    }
    .menu-toggle {
      display: none;
    }
  </style>
</head>
<body>

<?php
    include "navbar.php"
    ?>

<!-- Toggle Button -->
<button class="menu-toggle" onclick="toggleSidebar()">☰</button>

<!-- Main Content -->
<div class="main">
  <h2 class="mb-4">Manage Bookings</h2>

  <div class="card">
    <div class="card-header bg-dark text-white">Booking List</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Customer</th>
              <th>Tour</th>
              <th>Date</th>
              <th>People</th>
              <th>Status</th>
              <th style="width: 160px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Aarav Mehta</td>
              <td>Maldives Island Tour</td>
              <td>2025-04-12</td>
              <td>2</td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>
                <button class="btn btn-sm btn-success">Confirm</button>
                <button class="btn btn-sm btn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Sophie Liu</td>
              <td>Swiss Alps Adventure</td>
              <td>2025-04-20</td>
              <td>3</td>
              <td><span class="badge bg-success">Confirmed</span></td>
              <td>
                <button class="btn btn-sm btn-secondary">View</button>
                <button class="btn btn-sm btn-danger">Cancel</button>
              </td>
            </tr>
            <!-- More bookings -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('active');
  }
</script>
</body>
</html>
