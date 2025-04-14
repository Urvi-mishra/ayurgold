<?php
if (!defined('ABSPATH')) {
    exit;
}

function my_handle_enquiry_form() {
    if (isset($_POST['enquiry_submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // Save to database or send email
        $to = get_option('admin_email');
        $subject = "New Enquiry from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = ['Content-Type: text/plain; charset=UTF-8'];

        wp_mail($to, $subject, $body, $headers);

        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('init', 'my_handle_enquiry_form');
