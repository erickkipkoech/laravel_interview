<?php
/* Template Name: Filter */
get_header(); ?>

<div class="container">
    <h1>Filter Users</h1>
    <form id="filter-form">
        <input type="text" id="name" name="name" placeholder="Enter name to filter">
        <button type="submit">Filter</button>
    </form>
    <div id="filter-results"></div>
</div>

<?php get_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        // Handle filter form submission
        $('#filter-form').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            
            // AJAX request to filter endpoint
            $.ajax({
                url: appData.apiUrl + '/get_posts',
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
</script>