// dashboard.js

// Function to transition to another page
function transitionToPage(page) {
    // Hide the current dashboard page
    document.getElementById('dashboard.php').style.display = 'none';
  
    // Show the new page
    document.getElementById(page).style.display = 'block';
  
    // Perform any necessary page-specific actions
    // Example: 
    // if (page === 'inventory') {
    //   // Load inventory data and update the inventory table
    // } else if (page === 'warehouse') {
    //   // Load warehouse data and update the warehouse table
    // }
  
    // Add a smooth transition effect (optional)
    document.getElementById(page).classList.add('transition', 'duration-500', 'ease-in-out');
  }
  
 
  document.getElementById('analyticsButton').addEventListener('click', () => transitionToPage('analytics.php'));
  document.getElementById('dashboardButton').addEventListener('click', () => transitionToPage('dashboard.php'));
  document.getElementById('reportButton').addEventListener('click', () => transitionToPage('report.php));
  document.getElementById('coreoperationButton').addEventListener('click', () => transitionToPage('coreoperation.php'));
  document.getElementById('drivermanagementButton').addEventListener('click', () => transitionToPage('drivermanagement.php'));
  document.getElementById('fleetmanagementButton').addEventListener('click', () => transitionToPage('fleetmanagement.php'));
  
  
  
  document.getElementById('dashboard').style.display = 'block';
  document.getElementById('analytics').style.display = 'none';
  document.getElementById('report.php)').style.display = 'none';
  document.getElementById('coreoperation').style.display = 'none';
  document.getElementById('drivermanagement').style.display = 'none';
  document.getElementById('fleetmanagement').style.display = 'none';
  
  