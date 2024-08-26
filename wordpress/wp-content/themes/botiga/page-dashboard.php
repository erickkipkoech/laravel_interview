<?php
/* Template Name: Dashboard */
get_header(); ?>

<div class="container" id="dashboard">
    <h2>Welcome, <span id="user-name"></span></h2>
    <div id="dashboard-data"></div>
</div>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        // Check if user is logged in
        var user = JSON.parse(localStorage.getItem('user'));
        if (user) {
            $('#user-name').text(user.name);
            
            // AJAX request to fetch dashboard data
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
    });
</script>