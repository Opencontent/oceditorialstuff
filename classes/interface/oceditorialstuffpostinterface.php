<?php

interface OCEditorialStuffPostInterface
{
    /**
     * @return int
     */
    public function id();

    /**
     * @return eZContentObject
     */
    public function getObject();

    /**
     * @return OCEditorialStuffPostFactoryInterface
     */
    public function getFactory();

    public function setState( $stateIdentifier );

    public function onBeforeCreate();
    
    public function onCreate();

    public function onBeforeUpdate();
    
    public function onUpdate();

    public function onBeforeRemove();

    public function onRemove();

    /**
     * @param eZContentObjectState $beforeState
     * @param eZContentObjectState $afterState
     *
     * @return bool
     */
    public function onChangeState( eZContentObjectState $beforeState, eZContentObjectState $afterState );

    public function currentState();

    public function is( $stateIdentifier );

    public function isAfter( $stateIdentifier, $orEqual = false );

    public function isBefore( $stateIdentifier, $orEqual = false );

    public function tabs();

    public function attribute( $property );

    public function attributes();

    public function hasAttribute( $property );

    public function jsonSerialize();

    /**
     * @return eZContentObjectAttribute[]
     */
    public function contentAttributes();

}