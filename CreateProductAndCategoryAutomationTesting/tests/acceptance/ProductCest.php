<?php
use Step\Acceptance\CategorySteps as First;
use Step\Acceptance\ProductSteps as Second;

class ProductCest
{
    /**
     * @var string
     */

    protected $category;
    protected $product;
    protected $nameofcate;
    protected $nameofproduct;
    protected $numberofcate;
    protected $numberofproduct;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->category =
            [
                'name' => "Testting",
                'number' => "4"
            ];
        $this->product =
            [
                'name' => "test",
                'number' => "45"
            ];
        $this->nameofcate='testting';
        $this->nameofproduct='test';
        $this->numberofcate='2';
        $this->numberofproduct='12';
        $this->user='nhung';
        $this->pass='NhungNguyen';

    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function create(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new cetegory successfully");
        $I->CreateCategory($this->user, $this->pass, $this->nameofcate, $this->numberofcate);
        $I = new Second($scenario);
        $I->createProduct($this->user, $this->pass,$this->nameofproduct, $this->numberofproduct, $this->numberofcate);
        $I->comment("Create Categori and Product Successfully");
    }
}
