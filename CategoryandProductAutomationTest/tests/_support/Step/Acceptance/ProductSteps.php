<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 8:16 PM
 */

namespace Step\Acceptance;
use Page\ProductPage as Second;


class ProductSteps extends \AcceptanceTester
{
    /**
     * @param $name
     * @param $number
     * @param $category
     * @throws \Exception
     */
    public function CreateProduct($name, $number, $category)
    {
        $I = $this;
        $I->waitForElementVisible(Second::$productName, 30);
        $I->fillField(Second::$productName, $name);
        $I->fillField(Second::$productNumber, $number);
        $I->fillField(Second::$productCategory, $category);
        $I->pressKey(Second::$productCategory, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->click(Second::$saveButton);
        $I->pauseExecution();
    }
}