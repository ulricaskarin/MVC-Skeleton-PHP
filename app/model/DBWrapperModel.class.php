<?php
/**
 * ★ DBWrapperModel Class ★
 *
 * Creates new instance of the DatabaseModel Class.
 *
 * An abstract class that creates a new instance of the Database.
 * Allows interaction with the database without creating a new
 * instance in each class.
 *
 * All other classes in \model extends this class for example:
 *
 * Class UserModel extends \model\DBWrapperModel
 *
 * @author: ulricaskarin
 * @version 1.0.0
 */

 namespace model;

 abstract class DBWrapperModel
 {
   protected $db;

   public function __construct()
   {
     $this->db = new DatabaseModel();
   }
 }
