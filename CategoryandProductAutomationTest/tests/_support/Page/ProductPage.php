<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 8:07 PM
 */

namespace Page;


class ProductPage
{
    /**
     * @var string
     */
    public static $productHyperlink = '(//li[@class="treeview "])[1]/a';
    /**
     * @var string
     */
    public static $productManager = '//span[text()="Product Management"]';
    /**
     * @var string
     */
    public static $newButton = '//button[@class="btn btn-small button-new btn-success"]';
    /**
     * @var string
     */
    public static $productName = '//input[@name="product_name"]';
    /**
     * @var string
     */
    public static $productNumber = '//input[@name="product_number"]';
    /**
     * @var string
     */
    public static $productCategory = '//input[@id="s2id_autogen4"]';
    /**
     * @var string
     */
    public static $saveButton = '//button[@class=\'btn btn-small button-apply btn-success\']';

}