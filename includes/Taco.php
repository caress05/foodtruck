<?php

//post updated page level docblock
/**
 * demo_postback_nohtml.php is a single page web application that allows us to request and view 
 * a customer's name
 *
 * This version uses no HTML directly so we can code collapse more efficiently
 *
 * This page is a model on which to demonstrate fundamentals of single page, postback 
 * web applications.
 *
 * Any number of additional steps or processes can be added by adding keywords to the switch 
 * statement and identifying a hidden form field in the previous step's form:
 *
 *<code>
 * <input type="hidden" name="act" value="next" />
 *</code>
 * 
 * The above live of code shows the parameter "act" being loaded with the value "next" which would be the 
 * unique identifier for the next step of a multi-step process
 *
 * @package ITC281
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/10/11
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @todo finish instruction sheet
 * @todo add more complicated checkbox & radio button examples
 */


/**
* Tacos class, stores tacos
*
* I love tacos!
*
*<code>
* $myTacos = new Tacos('Beef', '2', 5.99);
*</code>
*
* @see RelatedClass
* @todo none
*/

class Tacos
{
    public $Meat = 'Combo';
    public $Number = 3;
    public $Price = 19.99;
    
    
    public function __construct($Meat, $Number, $Price)
    {
        $this->Meat = $Meat;
        $this->Number = $Number;
        $this->Price = $Price;
    }//end constructor
}//end Taco class

  /**
   * Loads Taco data
   *
   * More detail about description
   *
    *<code>
    * $myTacos = new Tacos('Beef', '2', 5.99);
    *</code>
   *
   * @param string $Meat What type of aco
   * @param string $Number How many tacos
   * @return float $Price Cost of the tacos
   * @todo none
   */

  function someFunction($FirstName,$YearBorn)
  {
      return $Age;
  }