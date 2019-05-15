<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 7:30 PM
 */

namespace Step\Acceptance;
use Page\AdminPage as Login;
use Page\CategoryPage as First;
use Page\ProductPage as Second;


class FirstSteps extends \AcceptanceTester
{
    /**
     * @param $name
     * @param $pass
     * @throws \Exception
     */
    public function LoginAsAdmin($name, $pass)
    {
        $I = $this;
        $I->amOnPage(Login::$URL);
        $I->waitForElementVisible(Login::$username,30);
        $I->fillField(Login::$username, $name);
        $I->fillField(Login::$pass, $pass);
        $I->click(Login::$loginButton);
        $I->pauseExecution();
        $I->waitForElementVisible(Login::$components,30);
        $I->click(Login::$components);
        $I->click(Login::$redShop);
    }

    /**
     * @throws \Exception
     */
    public function chooseCategory()
    {
        $I = $this;
        $I->waitForElementVisible(First::$categoryHyperlink,30);
        $I->click(First::$categoryHyperlink);
        $I->click(First::$newButton);
        $I->waitForElementVisible(First::$categoryName,30);
    }

    /**
     * @throws \Exception
     */
    public function chooseProduct()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$productHyperlink, 30);
        $I->click(Second::$productHyperlink);
        $I->click(Second::$productManager);
        $I->waitForElementVisible(Second::$newButton, 30);
        $I->click(Second::$newButton);
        $I->waitForElementVisible(Second::$productName, 30);
    }

}