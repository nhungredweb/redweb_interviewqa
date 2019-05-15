<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/15/2019
 * Time: 7:31 PM
 */
use Step\Acceptance\FirstSteps as First;
use Step\Acceptance\CategorySteps as Second;
use Step\Acceptance\ProductSteps as Product;

class AdminCest
{
    protected $username;
    protected $pass;
    protected $namecate;
    protected $number;
    protected $name;
    protected $numberProduct;
    protected $nameCateIncorrect;

    public function __construct()
    {
        $this->username = 'nhung';
        $this->pass = 'NhungNguyen';
        $this->namecate = 'testing';
        $this->number = '2';
        $this->name = 'test';
        $this->numberProduct = '1235';
        $this->nameCateIncorrect = '0';
    }

    /**
     * @param First $I
     * @throws Exception
     */
//    public function CreateAllSuccess(First $I, $scenario)
//    {
//        $I->wantToTest("Create category and product success!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate($this->namecate, $this->number);
//        $I = new First($scenario);
//        $I->chooseProduct();
//        $I = new Product($scenario);
//        $I->CreateProduct($this->name, $this->numberProduct, $this->namecate);
//        $I->comment("success!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function CategoryisNumber(First $I, $scenario)
//    {
//        $I->wantToTest("Category's name is number!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate($this->number, $this->number);
//        $I->comment("fail!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function Categoryincorrect(First $I, $scenario)
//    {
//        $I->wantToTest("Category's name is number 0!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate($this->nameCateIncorrect, $this->number);
//        $I->comment("fail!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function numberincorrect(First $I, $scenario)
//    {
//        $I->wantToTest("Number of category incorect!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate($this->name, -1);
//        $I->comment("fail!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function templateNotChoose(First $I, $scenario)
//    {
//        $I->wantToTest("Template not choose!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCateNotTemplate($this->name, $this->number);
//        $I->comment("fail!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function CategoryNameNULL(First $I, $scenario)
//    {
//        $I->wantToTest("Category is NULL/Empty!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate("", $this->number);
//        $I->comment("fail!");
//    }
//
//    /**
//     * @param First $I
//     * @param $scenario
//     * @throws Exception
//     */
//    public function NumberNULL(First $I, $scenario)
//    {
//        $I->wantToTest("Number is NULL/Empty!");
//        $I->LoginAsAdmin($this->username, $this->pass);
//        $I->chooseCategory();
//        $I = new Second($scenario);
//        $I->CreateCate($this->name, "");
//        $I->comment("fail!");
//    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function NumberandCategorynameNULL(First $I, $scenario)
    {
        $I->wantToTest("Number and Category name are NULL/Empty!");
        $I->LoginAsAdmin($this->username, $this->pass);
        $I->chooseCategory();
        $I = new Second($scenario);
        $I->CreateCate("", "");
        $I->comment("fail!");
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function AllNULL(Second $I)
    {
        $I->wantToTest("Number, Category name are NULL/Empty. Template not choose!");
        $I->ClearAll();
        $I->CreateCateNotTemplate("", "");
        $I->comment("fail!");
    }
}