<?php
namespace Step\Acceptance;
use Page\FirstPage as First;
use Page\ProductPage as Product;

class ProductSteps extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @param $name
     * @param $number
     * @param $namecate
     * @throws \Exception
     */
    public function createProduct($user, $pass, $name, $number, $namecate)
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$username,30);
        $I->fillField(First::$username, $user);
        $I->fillField(First::$pass, $pass);
        $I->click(First::$loginButton);
        $I->waitForElementVisible(First::$productsHyperlink,30);
        $I->click(First::$productsHyperlink);
        $I->click(First::$productManagerHyperlink);
        $I->click(First::$newButton);
        $I->waitForElementVisible(Product::$nameProduct,30);
        $I->fillField(Product::$nameProduct, $name);
        $I->fillField(Product::$productNumber, $number);
        $I->fillField(Product::$productCategory, $namecate);
        $I->click(Product::$saveButton);
        $I->pause();
    }

}