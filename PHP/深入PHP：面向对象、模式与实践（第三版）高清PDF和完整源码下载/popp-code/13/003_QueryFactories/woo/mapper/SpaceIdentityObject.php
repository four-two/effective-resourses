<?php
namespace woo\mapper;

require_once("woo/mapper/IdentityObject.php");

class SpaceIdentityObject extends IdentityObject {
    function __construct( $field=null ) {
       parent::__construct( $field, array('name', 'id','venue' ) ); 
    }
}

?>
