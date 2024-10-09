<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>


<html lang="en">
<head>
    <meta name="viewport" content="device-width", initial-scale="1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    
<body>
<script>
    // Function to clear the content area
    function clearModuleContent() {
        const moduleContent = document.getElementById("module-content");
        moduleContent.innerHTML = ''; // Clear the existing content
    }


 // Function to dashboard content
 function dashboard() {
        clearModuleContent(); // Clear previous module content

        const moduleContent = document.getElementById("module-content");
        moduleContent.innerHTML = `
        <p>Welcome to your dashboard!</p>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>dashboard - Content Here</h4>
                </div>
                <div class="card-body">
                    <p>dashboard content is loaded here.</p>
                </div>
            </div>
        </div>`;
 }


 // Function to module content
 function toggleSubmodules() {
        clearModuleContent(); // Clear previous module content

        const moduleContent = document.getElementById("module-content");
        moduleContent.innerHTML = `
        <p>Welcome to your module 1!</p>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>module 1- Content Here</h4>
                </div>
                <div class="card-body">
                    <p>module 1 content is loaded here.</p>
                </div>
            </div>
        </div>`;
 }






          // Function to load Module 1 content
       // Function to load Module 1 content
function loadModule1() {
    clearModuleContent(); // Clear previous module content
    const moduleContent = document.getElementById("module-content");
    moduleContent.innerHTML = `
    
   <style>


.container {
    height: 100vh; /* Full height viewport */
    overflow-y: auto; /* Scrollable content */
    padding: 20px;
    background-color: #f4f4f4;
}

/* Summary card grid layout */
.row.mt-4 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.summary-card {
    background-color: #007bff;
    color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 10 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.summary-card h4 {
    font-size: 18px;
    margin: 0;
}

.summary-card p {
    font-size: 20px;
    font-weight: bold;
    margin: 5px 0 0;
}

/* Form and table styling */
#reservationForm {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.table-responsive {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.table thead th {
    background-color: #007bff;
    color: #fff;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Scrollbar styling */
.container::-webkit-scrollbar {
    width: 10px;
}

.container::-webkit-scrollbar-thumb {
    background-color: white;
    border-radius: 10px;
}

.container::-webkit-scrollbar-track {
    background-color: #f4f4f4;
}
    
/* Flexbox Container for Side-by-Side Layout */
.flex-container {
    display: flex;
    justify-content: space-between; /* Distribute space between items */
    gap: 20px; /* Space between the form and the table */
    margin-top: 20px;
}

.form-container, .table-container {
    flex: 1; /* Both the form and table will take equal space */
    background-color: #f9f9f9; /* Light background color for contrast */
    padding: 0px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
}

/* Styling for the Reservation Form */
.form-group label {
    font-weight: bold;
    margin-top: 10px;
    color: #333;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #0e3b6b;
    outline: none;
}

#reservationForm .btn-primary {
    background-color: #0e3b6b;
    border: none;
    padding: 10px 20px;
    margin-top: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#reservationForm .btn-primary:hover {
    background-color: #09254b;
}

/* Table Styling for Existing Reservations */
.table {
    width: 100%;
    border: 1px solid #ddd;
}

.table thead {
    background-color: #0e3b6b;
    color: white;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2;
}

.table-striped tbody tr:hover {
    background-color: #e0e0e0;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
}

.table-responsive {
    overflow-x: auto;
}
/* Enhanced Flexbox Container */
.flex-container {
    display: flex;
    flex-wrap: wrap; /* Wrap content for better mobile responsiveness */
    justify-content: space-between;
    gap: 10px;
    margin-top: 20px;
}

/* Card Styling for Dashboard Summary */
.summary-card {
    background-color: #f0f4f8;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.summary-card h4 {
    font-size: 18px;
    color: #0e3b6b;
    margin-bottom: 10px;
}

.summary-card p {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.summary-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

/* Styling for Form and Table Containers */
.form-container, .table-container {
    flex: 1;
    background-color: #ffffff;
    padding: 1px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.form-container:hover, .table-container:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Improved Form Styling */
.form-group label {
    font-weight: bold;
    color: #555;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #0e3b6b;
    outline: none;
}

#reservationForm .btn-primary {
    background-color: #0e3b6b;
    border: none;
    padding: 12px 24px;
    margin-top: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#reservationForm .btn-primary:hover {
    background-color: #09254b;
    transform: scale(1.05);
}

/* Improved Table Styling */
.table {
    width: 100%;
    margin-top: 10px;
    border: 1px solid #ddd;
}

.table thead {
    background-color: #0e3b6b;
    color: white;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2;
}

.table-striped tbody tr:hover {
    background-color: #e0e0e0;
    transition: background-color 0.3s ease;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
}

.table-responsive {
    overflow-x: auto;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .flex-container {
        flex-direction: column; /* Stack elements vertically on smaller screens */
    }
}

    </style>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <!-- Dashboard Summary Cards -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="summary-card">
                    <h4>Total Reservations</h4>
                    <p>25</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="summary-card">
                    <h4>Available Facilities</h4>
                    <p>5</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="summary-card">
                    <h4>Reservations Today</h4>
                    <p>3</p>
                </div>
            </div>
        </div>
                <h2 class="text-center">Welcome to your Barangay Facility Reservation Dashboard</h2>

            </div>
        </div>
        <div class="flex-container">
        <!-- Form Container -->
        <div class="form-container">
            <h2 class="text-center">Facility Reservation</h2>
            <form id="reservationForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" required>
                </div>
                <div class="form-group">
                    <label for="purpose">Purpose:</label>
                    <textarea class="form-control" id="purpose" required></textarea>
                </div>
                <div class="form-group">
                    <label for="room_type">Room Type:</label>
                    <select class="form-control" id="room_type">
                        <option value="Conference Room">Conference Room</option>
                        <option value="Gymnasium">Gymnasium</option>
                        <option value="Function Hall">Function Hall</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control w-25 d-inline-block" id="filter-price-range">
                        <option value="all">All Prices</option>
                        <option value="low">Below 500</option>
                        <option value="medium">500 - 1000</option>
                        <option value="high">Above 1000</option>
                    </select>
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="addReservation()">Add Reservation</button>
            </form>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <h5>Existing Reservations</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Purpose</th>
                            <th>Room Type</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="reservationTableBody">
                        <!-- Reservation records will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    `;
}
   

  // Load existing reservations on page load
window.onload = loadReservations;

function loadReservations() {
    fetch('reservations.php') // Ensure this matches your PHP file's name
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('reservationTableBody');
            tableBody.innerHTML = '';
            data.forEach(reservation => {
                const row = `
                    <tr>
                        <td>${reservation.id}</td>
                        <td>${reservation.name}</td>
                        <td>${reservation.date}</td>
                        <td>${reservation.time}</td>
                        <td>${reservation.purpose}</td>
                        <td>${reservation.room_type}</td>
                        <td>${reservation.price}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editReservation(${reservation.id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteReservation(${reservation.id})">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        });
}

// Function to add a reservation
function addReservation() {
    const data = {
        name: document.getElementById('name').value,
        date: document.getElementById('date').value,
        time: document.getElementById('time').value,
        purpose: document.getElementById('purpose').value,
        room_type: document.getElementById('room_type').value,
        price: parseFloat(document.getElementById('price').value)
    };

    fetch('reservations.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(() => {
        loadReservations(); // Reload the reservations
        document.getElementById('reservationForm').reset(); // Clear the form
    });
}

// Function to delete a reservation
function deleteReservation(id) {
    fetch('reservations.php', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id })
    }).then(() => loadReservations());
}

// Function to edit a reservation (to be implemented)
function editReservation(id) {
    // You can implement the edit functionality here (e.g., populate the form)
}


   // Function to load Module 2 content
   function loadModule2() {
        clearModuleContent(); // Clear previous module content
        const moduleContent = document.getElementById("module-content");
        moduleContent.innerHTML = `
        <style>
        
        /* Filter and Search */
        .filter-search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .filter-dropdown {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Container for the scrollable facilities */
        .facility-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-height: 60vh; /* Set maximum height */
            overflow-y: auto; /* Make it scrollable */
            padding-right: 10px; /* Add padding for scrollbar space */
        }

        /* Facility card styles */
        .facility-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: box-shadow 0.3s ease;
            position: relative;
        }

        .facility-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        }

        .facility-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .facility-name {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }

        .facility-type {
            font-size: 1em;
            color: #777;
            margin-bottom: 10px;
        }

        .facility-description {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
        }

        .facility-price {
            font-size: 1.2em;
            color: #27ae60;
            margin-bottom: 10px;
        }

        .facility-availability {
            font-size: 0.9em;
            color: #888;
            margin-bottom: 10px;
        }

        /* Availability status indicator */
        .available {
            color: #28a745;
            font-weight: bold;
        }

        .unavailable {
            color: #dc3545;
            font-weight: bold;
        }

        /* Booking button */
        .book-btn {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .book-btn:hover {
            background-color: #0056b3;
        }

        /* Style for scrollbar */
        .facility-container::-webkit-scrollbar {
            width: 10px;
        }
        .facility-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 10px;
        }
        .facility-container::-webkit-scrollbar-track {
            background-color: #f4f4f4;
        }

        /* Responsive adjustments */
        @media(max-width: 600px) {
            .facility-container {
                grid-template-columns: 1fr;
            }

            .filter-search-container {
                flex-direction: column;
                align-items: stretch;
            }

            .search-bar, .filter-dropdown {
                margin-bottom: 10px;
            }
        }
    </style>
    <!-- Filter and Search -->
    <div class="filter-search-container">
        <div class="search-bar">
            <input type="text" placeholder="Search Facility..." id="facilitySearch" oninput="searchFacilities()">
        </div>
        <div class="filter-dropdown">
            <select id="facilityTypeFilter" onchange="filterFacilities()">
                <option value="all">All Types</option>
                <option value="Hall">Hall</option>
                <option value="Room">Room</option>
                <option value="Outdoor Court">Outdoor Court</option>
                <option value="Gym">Gym</option>
            </select>
        </div>
    </div>

    <div class="facility-container" id="facility-list">
        <!-- Facility 1 -->
        <div class="facility-card" data-type="Hall">
    <!-- Correct image path for locally stored image -->
    <img src="brgy.jpg" alt="Community Hall Image" class="facility-image">
    <div class="facility-name">Community Hall</div>
    <div class="facility-type">Hall</div>
    <div class="facility-description">A large community hall perfect for meetings, gatherings, and events.</div>
    <div class="facility-price">₱500 / hour</div>
    <div class="facility-availability available">Available: 9 AM - 6 PM</div>
    <button class="book-btn">EDIT</button>
</div>


        <!-- Facility 2 -->
        <div class="facility-card" data-type="Room">
            <img src="confe.jpg" alt="Facility Image" class="facility-image">
            <div class="facility-name">Conference Room</div>
            <div class="facility-type">Room</div>
            <div class="facility-description">Ideal for small meetings, presentations, and work sessions.</div>
            <div class="facility-price">₱300 / hour</div>
            <div class="facility-availability unavailable">Unavailable</div>
            <button class="book-btn" disabled>Book Now</button>
        </div>

        <!-- Facility 3 -->
        <div class="facility-card" data-type="Outdoor Court">
            <img src="kort.jpg" alt="Facility Image" class="facility-image">
            <div class="facility-name">Basketball Court</div>
            <div class="facility-type">Outdoor Court</div>
            <div class="facility-description">Outdoor court for basketball games and tournaments.</div>
            <div class="facility-price">₱1000 / day</div>
            <div class="facility-availability available">Available: 7 AM - 9 PM</div>
            <button class="book-btn">Book Now</button>
        </div>

        <!-- Facility 4 -->
        <div class="facility-card" data-type="Hall">
            <img src="banket.jpg" alt="Facility Image" class="facility-image">
            <div class="facility-name">Banquet Hall</div>
            <div class="facility-type">Hall</div>
            <div class="facility-description">Spacious hall for weddings, parties, and large events.</div>
            <div class="facility-price">₱1500 / hour</div>
            <div class="facility-availability available">Available: 9 AM - 10 PM</div>
            <button class="book-btn">Book Now</button>
        </div>

        <!-- Facility 5 -->
        <div class="facility-card" data-type="Gym">
            <img src="gym.jpg" alt="Facility Image" class="facility-image">
            <div class="facility-name">Gymnasium</div>
            <div class="facility-type">Gym</div>
            <div class="facility-description">Indoor gymnasium for sports, fitness events, and exercise sessions.</div>
            <div class="facility-price">₱800 / hour</div>
            <div class="facility-availability unavailable">Unavailable</div>
            <button class="book-btn" disabled>Book Now</button>
        </div>
    </div>
        </div>
        </div>`;
   }
   // Search function
  function searchFacilities() {
            const searchInput = document.getElementById("facilitySearch").value.toLowerCase();
            const facilities = document.querySelectorAll(".facility-card");
            facilities.forEach(facility => {
                const facilityName = facility.querySelector(".facility-name").textContent.toLowerCase();
                if (facilityName.includes(searchInput)) {
                    facility.style.display = "block";
                } else {
                    facility.style.display = "none";
                }
            });
        }

        // Filter function
        function filterFacilities() {
            const filterValue = document.getElementById("facilityTypeFilter").value;
            const facilities = document.querySelectorAll(".facility-card");
            facilities.forEach(facility => {
                if (filterValue === "all" || facility.getAttribute("data-type") === filterValue) {
                    facility.style.display = "block";
                } else {
                    facility.style.display = "none";
                }
            });
        }
</script>





<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <!-- Logo for LGU -->
    <img id="lgu-logo" src="logo.png" alt="LGU Logo" class="lgu-logo">
 
        <ul class="sidebar-menu">
        </li>
        <li class="list-group-item">
            <a href="#" onclick="dashboard()"><i class="fas fa-th-large"></i>Dashboard</a></li>
            <ul class="list-group">



         <!-- Dropdown for Module 1 -->
    <li class="list-group-item">
        <a href="#" id="module1" onclick="toggleSubmodules('submodule1-dropdown')">
            <i class="fas fa-wrench"></i>Module 1 <i class="fas fa-chevron-down"></i>
        </a>
        <ul class="submodule-dropdown" id="submodule1-dropdown" style="display: none;">
            <li><a href="#" id="submodule1" onclick="loadSubmodule(1)">Submodule 1</a></li>
            <li><a href="#" id="submodule2" onclick="loadSubmodule(2)">Submodule 2</a></li>
            <li><a href="#" id="submodule3" onclick="loadSubmodule(3)">Submodule 3</a></li>
        </ul>
    </li>


                <li class="list-group-item">
                    <a href="#" onclick="loadModule1()"><i class="fas fa-wrench"></i>FACILITY RESERVATIONS</a>
                </li>
                <li class="list-group-item">
                    <a href="#" onclick="loadModule2()"><i class="fas fa-wrench"></i>FACILITY LISTING</a>
                </li>
                
                </li>
                </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <header>
            <div class="menu-toggle" id="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="header-right">
                <i class="fas fa-comment-dots" id="message-icon"></i>
                <i class="fas fa-bell" id="notification-icon"></i>
                <div class="profile" id="profile-icon">

                    <div class="profile-container">
                        <div class="profile-icon">

<!-- User Profile Icon and Dropdown -->
<div class="user-profile" onclick="toggleDropdown()">
    <img src="wa.jpg" alt="Profile" class="profile-image">
</div>

<!-- Dropdown Menu -->
<div class="dropdown-menu" id="dropdownMenu">
    <div class="dropdown-header">
        <img src="aa.jpg" alt="User Avatar">
        <h3>Hello, User!</h3>
    </div>
    <ul>
        <li>
            <a href="edit_profile.php">
                <i class="fas fa-user icon-profile"></i><span>Edit Profile</span>
                <i class="fas fa-chevron-right arrow-icon"></i>
            </a>
        </li>
        <li>
            <i class="fas fa-cog icon-settings"></i><span>Settings & Privacy</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
        </li>
        <li>
            <i class="fas fa-question-circle icon-help"></i><span>Help & Support</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
        </li>
        <li>
            <i class="fas fa-sign-out-alt icon-logout"></i><a href="logout.php">Logout</a>
            <i class="fas fa-chevron-right arrow-icon"></i>
        </li>
    </ul>
</div>



                  
                </div>
            </div>
        </header>
        <main>
            <h1 id="content-title">Dashboard</h1>
            
        
            <!-- Empty Section for Module Content -->
           <!-- Content Area -->
    <div class="col-9">
        <div id="module-content" class="content-area"></div>
    </div>

        </main>
    </div>

    
    <script>// Toggle sidebar functionality
        document.getElementById("menu-toggle").addEventListener("click", function () {
            document.getElementById("sidebar").classList.toggle("collapsed");
            document.getElementById("main-content").classList.toggle("collapsed");
        });
   
        // Change content based on clicked module
        document.querySelectorAll(".sidebar-menu li a").forEach(item => {
            item.addEventListener("click", function (event) {
                // Remove active class from all menu items
                document.querySelectorAll(".sidebar-menu li").forEach(li => li.classList.remove("active"));
                
                // Add active class to clicked menu item
                event.currentTarget.parentElement.classList.add("active");
        
                // Change the content dynamically
                const contentTitle = document.getElementById("content-title");
                contentTitle.textContent = event.currentTarget.textContent.trim();
            });
        });
        
        // Handle profile, notifications, and messages click
        document.getElementById("profile-icon").addEventListener("click", function () {
            const profileIcon = document.getElementById('profileIcon');
const dropdownMenu = document.getElementById('dropdownMenu');

// Toggle the dropdown menu when the profile icon is clicked
profileIcon.addEventListener('click', function() {
  dropdownMenu.classList.toggle('show');
});

// Close the dropdown menu if clicked outside
window.addEventListener('click', function(e) {
  if (!profileIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.remove('show');
  }
});
        });

   // Function to toggle dropdown menu
   function toggleDropdown() {
        var dropdown = document.getElementById("dropdownMenu");
        dropdown.classList.toggle("active");
    }

    // Close the dropdown if clicked outside
    window.onclick = function(event) {
        if (!event.target.closest('.user-profile')) {
            document.getElementById("dropdownMenu").classList.remove("active");
        }
    }
        
        document.getElementById("notification-icon").addEventListener("click", function () {
            alert("Notifications clicked!");
        });
        
        document.getElementById("message-icon").addEventListener("click", function () {
            alert("Messages clicked!");
        });

// Function to toggle the dropdown visibility
function toggleSubmodules(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
}

// Function to load the specific submodule
function loadSubmodule(submoduleNumber) {
    clearModuleContent(); // Clear previous module content
    const moduleContent = document.getElementById("module-content");

    let submoduleTitle = "";
    let submoduleContent = "";

    switch (submoduleNumber) {
        case 1:
            submoduleTitle = "Submodule 1";
            submoduleContent = "Content for Submodule 1 is loaded here.";
            break;
        case 2:
            submoduleTitle = "Submodule 2";
            submoduleContent = "Content for Submodule 2 is loaded here.";
            break;
        case 3:
            submoduleTitle = "Submodule 3";
            submoduleContent = "Content for Submodule 3 is loaded here.";
            break;
        default:
            submoduleTitle = "Module 1";
            submoduleContent = "Default content for Module 1.";
    }

    moduleContent.innerHTML = `
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h4>${submoduleTitle}</h4>
            </div>
            <div class="card-body">
                <p>${submoduleContent}</p>
            </div>
        </div>
    </div>`;
}

// Function to clear previous module content
function clearModuleContent() {
    document.getElementById("module-content").innerHTML = "";
}

    
</script>

</body>
</html>