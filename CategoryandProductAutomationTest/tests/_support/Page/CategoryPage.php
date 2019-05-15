<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 7:34 PM
 */

namespace Page;


class CategoryPage
{
    /**
     * @var string
     */
    public static $categoryHyperlink = '//span[text()="Categories"]';
    /**
     * @var string
     */
    public static $newButton = '//Button[@class="btn btn-small button-new btn-success"]';
    /**
     * @var string
     */
    public static $categoryName = '//input[@name="jform[name]"]';
    /**
     * @var string
     */
    public static $number = '//input[@name="jform[products_per_page]"]';
    /**
     * @var string
     */
    public static $template = '(//a[@class="select2-choice"])[2]';
    /**
     * @var string
     */
    public static $listTemplate = '(//ul[@class="select2-results"]/li)[5]';
    /**
     * @var string
     */
    public static $saveButton = '//button[@class="btn btn-small button-apply btn-success"]';

    public static $notchooseTemplate = '(//ul[@class="select2-results"]/li)[4]';
}