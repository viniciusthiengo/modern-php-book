<?php
namespace Document \ Domain;
use Document\DomainInterface\Documentable;

/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:22 AM
 */

class DocumentStore {
    protected $data = [];

    public function addDocument( Documentable $document ){
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[ $key ] = $value;
    }

    public function getDocuments(){
        return( $this->data );
    }
}