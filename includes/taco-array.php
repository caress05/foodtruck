<?php

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
 *
 *taco-array.php
 *creates an array of tacos for food truck
 *
 */
//post updated page level docblock

    

include 'Taco.php';
    
$tacos[]= new Tacos('Beef', '2', 5.99);    
$tacos[]= new Tacos('Chicken', '2', 4.99);   
$tacos[]= new Tacos('Shrimp', '2', 6.99);   
$tacos[]= new Tacos('Pork', '2', 6.49);
$tacos[]= new Tacos('Veggie', '2', 3.99);