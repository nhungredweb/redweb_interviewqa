<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 7:29 PM
 */

namespace Page;


class AdminPage
{
    // include url of current page
    public static $URL = '';
    /**
     * @var string
     */
    public static $username = '//input[@name="username"]';
    /**
     * @var string
     */
    public static $pass = '//input[@name="passwd"]';
    /**
     * @var string
     */
    public static $loginButton = '//button[@class="btn btn-primary btn-block btn-large login-button"]';
    /**
     * @var string
     */
    public static $components = '(//a[@class="dropdown-toggle"])[5]';
    /**
     * @var string
     */
    public static $redShop = '//a[@class="no-dropdown menu-redshopcart16"]';
}