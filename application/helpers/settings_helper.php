<?php
function get_settings($key)
{
    $ci = &get_instance();
    $ci->load->model('Settings_model', 'settings_md');
    $settings = new Settings_model;
    return $settings->select_data($key);
}

function get_settings2()
{
    $ci = &get_instance();
    $ci->load->model('Settings_model', 'settings_md');
    $settings = new Settings_model;
    return $settings->select_front();
}
function get_website_logo()
{
    $ci = &get_instance();
    $ci->load->model('Website_logo_model', 'website_logo_md');
    $website_logo = new Website_logo_model;
    return $website_logo->select_data();
}
function is_logged()
{
    $ci = &get_instance();
    if (empty($ci->session->userdata('loggedin'))) {
        redirect('backend/login');
    }
}
