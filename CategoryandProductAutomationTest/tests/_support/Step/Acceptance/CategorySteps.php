<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 7:56 PM
 */

namespace Step\Acceptance;
use Page\CategoryPage as First;

class CategorySteps extends \AcceptanceTester
{
    /**
     * @param $nameCate
     * @param $numberCate
     * @throws \Exception
     */
    public function CreateCate($nameCate, $numberCate)
    {
        $I = $this;
        $I->waitForElementVisible(First::$categoryName,30);
        $I->fillField(First::$categoryName, $nameCate);
        $I->clearField(First::$number);
        $I->fillField(First::$number, $numberCate);
        $I->click(First::$template);
        $I->click(First::$listTemplate);
        $I->click(First::$saveButton);
        $I->pauseExecution();
    }

    /**
     * @param $nameCate
     * @param $numberCate
     * @throws \Exception
     */
    public function CreateCateNotTemplate($nameCate, $numberCate)
    {
        $I = $this;
        $I->waitForElementVisible(First::$categoryName,30);
        $I->fillField(First::$categoryName, $nameCate);
        $I->clearField(First::$number);
        $I->fillField(First::$number, $numberCate);
        $I->click(First::$template);
        $I->click(First::$notchooseTemplate);
        $I->click(First::$saveButton);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function ClearAll()
    {
        $I = $this;
        $I->waitForElementVisible(First::$categoryName,30);
        $I->clearField(First::$categoryName);
        $I->clearField(First::$number);
        $I->clearField(First::$number);
        $I->click(First::$template);
        $I->click(First::$notchooseTemplate);
    }
}