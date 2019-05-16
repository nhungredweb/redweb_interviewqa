<?php
namespace Page;

class FirstPage
{
    // include url of current page
    public static $URL = '&view=product';
    /**
     * @var string
     */
    public static $productsHyperlink = '//li[@class="treeview"]/a';
    /**
     * @var string
     */
    public static $productManagerHyperlink = '//span[text()="Product Management"]';
    /**
     * @var string
     */
    public static $newButton = '//button[@class="btn btn-small button-new btn-success"]';
    /**
     * @var string
     */
    public static $categoriesHyperlink = '//span[text()="Categories"]';

    public static $username = '//input[@name="username"]';

    public static $pass = '//input[@name="passwd"]';

    public static $loginButton = '//button[@class="btn btn-primary btn-block btn-large login-button"]';
}
