<?php
/* Template Name: Login */
get_header(); ?>

<div class="container">
    <h1>Login</h1>
    <form id="login-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
</div>

<?php get_footer(); ?>