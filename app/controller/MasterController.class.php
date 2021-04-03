<?php
/**
 * ★ MasterController ★
 *
 * @author: ulricaskarin
 * @version 1.0.0
 */

namespace controller;

use \_storage\Session;

/**
 * Class MasterController
 * @package controller
 */
class MasterController
{
  /**
  * MasterController constructor.
  */
  public function __construct()
  {
    // Create Objects for model and view etc.
  }

  /**
  * Listens to user action.
  * User is registering | User is logging in.
  */
  public function listenToUserAction()
  {
    try {
        // Logic here
    } catch (\Exception $e) {
        // Display Error
    }
        // Tell view to output HTML
        echo 'Hello World, MasterController is listening!';
  }
}
