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
        if (window.location.pathname === '/dashboard') {
            var user = JSON.parse(localStorage.getItem('user'));
            if (user) {
                $('#user-name').text(user.name);
                $.ajax({
                    url: appData.apiUrl + '/dashboard',
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
    
        // Handle filter form submission
        $('#filter-form').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            
            // AJAX request to filter endpoint
            $.ajax({
                url: appData.apiUrl + '/filter',
                method: 'GET',
                data: { name: name },
                success: function(response) {
                    var results = response.users.map(function(user) {
                        return '<p>' + user.name + '</p>';
                    });
                    $('#filter-results').html(results);
                }
            });
        });
});