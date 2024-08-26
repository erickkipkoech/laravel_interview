jQuery(document).ready(function($) {
    // Handle login form submission
    $('#login-form').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        
        // AJAX request to login endpoint
        $.ajax({
            url: appData.apiUrl + '/login',
            method: 'POST',
            data: { email: email, password: password },
            success: function(response) {
                if (response.success) {
                    alert('Login successful');
                    localStorage.setItem('user', JSON.stringify(response.user));
                    window.location.href = '/dashboard';
                } else {
                    alert('Invalid credentials');
                }
            }
        });
    });

    // Similar AJAX calls for dashboard and filter functionality
        // Handle fetching dashboard data
        if (window.location.pathname === '/get_posts') {
            var user = JSON.parse(localStorage.getItem('user'));
            if (user) {
                $('#user-name').text(user.name);
                $.ajax({
                    url: appData.apiUrl + '/get_posts',
                    method: 'GET',
                    headers: { 'Authorization': 'Bearer ' + user.api_token },
                    success: function(response) {
                        $('#dashboard-data').text(response.data);
                    }
                });
            } else {
                window.location.href = '/login';
            }
        }
});