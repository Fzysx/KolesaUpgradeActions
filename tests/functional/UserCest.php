<?php

use Faker\Factory;

/**
 * Класс для раоты с юзером
 */

class UserCest
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param FunctionalTester $I
     * @return void
     */
    public function _before(FunctionalTester $I){
       
        $faker = Factory::create('en_US');
    
        $this ->data = [
            'job' => $faker-> company,
            'email' => 'ggg@ggg.com',
            'name' => $faker -> name,
            'owner' => 'Fzysx'   
        ];

    }    
    /**
     * Тест на создание юзера
     * @group test1
     */
    public function checkUserCreate(\FunctionalTester $I)
    {   
    
        $I->haveHttpHeader('Content-Type','application/json');
        $I->sendPost('human', $this->data);

        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);

 
    
    }
}