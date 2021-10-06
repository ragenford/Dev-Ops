<?php

class ManagerControllers{
    /**
     *@return GenesisController
     */
    public static  function getControllerGenesis(){
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return  $controller;
    }

    /**
     * @return BooksController
     */
    public static  function getControllerBooks(){
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return  $controller;
    }

    /**
     * @return ContactController
     */
    public static  function getControllerContact(){
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return  $controller;
    }

    /**
     * @return HomeController
     */
    public static  function getControllerHome(){
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return  $controller;
    }





}