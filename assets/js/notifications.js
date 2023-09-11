// notifications.js

// Function to add a new notification
function addNotification(message) {
    const notificationList = document.getElementById('notification-list');
    const notificationItem = document.createElement('li');
    notificationItem.textContent = message;
    notificationList.appendChild(notificationItem);
}

// Function to show notifications
function showNotifications() {
    const notifications = document.getElementById('notifications');
    notifications.style.display = 'block'; // Show the notifications container
}

// Function to hide notifications
function hideNotifications() {
    const notifications = document.getElementById('notifications');
    notifications.style.display = 'none'; // Hide the notifications container
}

// Example usage:
// Add multiple notifications and show them
addNotification('Low feed levels. Consider restocking.');
addNotification('Employee salary payments due in 3 days.');
showNotifications();

// After some time, you can hide the notifications
setTimeout(() => {
    hideNotifications();
}, 5000); // Hide notifications after 5 seconds (5000 milliseconds)

