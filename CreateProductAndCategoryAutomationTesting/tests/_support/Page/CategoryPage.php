<?php
namespace Page;

class CategoryPage
{
    /**
     * @var string
     */
    public static $categoryNameField = '//input[@id="jform_name"]';
    /**
     * @var string
     */
    public static $noofProductsperPage = '//input[@id="jform_products_per_page"]';
    /**
     * @var string
     */
    public static $templateSpinner = '(//a[@class="select2-choice"])[2]';
    /**
     * @var string
     */
    public static $saveButton = '//button[@class="btn btn-small button-apply btn-success"]';
    /**
     * @var string
     */
    public static $listTemplate = '(//li[@class="select2-results-dept-0 select2-result select2-result-selectable"])[1]';

}
