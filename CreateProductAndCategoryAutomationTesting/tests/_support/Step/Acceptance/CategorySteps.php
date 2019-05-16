<?php
namespace Step\Acceptance;
use Page\FirstPage as First;
use Page\CategoryPage as Category;

class CategorySteps extends \AcceptanceTester
{
    /**
     * @param array $category
     * @throws \Exception
     */
    public function CreateCategory($user, $pass,$name, $number)
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$username,30);
        $I->fillField(First::$username, $user);
        $I->fillField(First::$pass, $pass);
        $I->click(First::$loginButton);
        $I->waitForElementVisible(First::$categoriesHyperlink,30);
        $I->click(First::$categoriesHyperlink);
        $I->click(First::$newButton);
        $I->waitForElementVisible(Category::$categoryNameField,30);
        $I->fillField(Category::$categoryNameField,$name);
        $I->clearField(Category::$noofProductsperPage);
        $I->fillField(Category::$noofProductsperPage, $number);
        $I->click(Category::$templateSpinner);
        $I->waitForElementVisible(Category::$listTemplate,30);
        $I->click(Category::$listTemplate);
        $I->click(Category::$saveButton);
    }

}