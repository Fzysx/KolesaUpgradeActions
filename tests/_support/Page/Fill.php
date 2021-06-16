<?php
namespace Page;

/**
 * PageObject для страницы формы
 */
class Fill
{
    /**
     * Локатор поля имени
     */
   public static $firstName = '//*[@id="firstName"]';

   /**
    * Локатор поля фамилии
    */
   public static $lastName = '//*[@id="lastName"]';
   
   /**
    * Локатор поля email-а
    */
   public static $email = '//*[@type ="email"]';

   /**
    * Локатор поля номера телефона
    */
    public static $phoneNumber = '//*[@id ="phoneNumber"]';

    /**
    * Локатор поля адреса
    */
    public static $address = '//*[@id ="address"]';

    /**
    * Локатор поля города
    */
    public static $city = '//*[@id ="city"]';

    /**
    * Локатор поля региона
    */
    public static $state = '//*[@id ="state"]';

    /**
    * Локатор поля почтового индекса
    */
    public static $postal = '//*[@id ="postal"]';

    /**
    * Локатор кнопки Регистрации
    */
    public static $registerButton = '//*[@type="submit"]';

}
