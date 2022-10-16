<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('kode_user');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('kode_user');
    if (!$user_session) {
        redirect('auth/login');
    }
}

function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . '-' . $m . '-' . $y;
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->status_level != "superadmin") {
        redirect('dashboard');
    }
}

function check_admin_user()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->status_level != "user") {
        redirect('dashboard');
    }
}
