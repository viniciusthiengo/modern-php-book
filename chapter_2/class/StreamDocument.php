<?php
namespace Document \ Domain;
use Document\DomainInterface\Documentable;

/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:30 AM
 */

class StreamDocument implements Documentable {

    protected $resource;
    protected $buffer;

    public function __construct($resource, $buffer = 4096){
        $this->resource = $resource;
        $this->buffer = $buffer;
    }

    public function getId()
    {
        return( 'resource-'. (int)$this->resource );
    }

    public function getContent()
    {
        $streamContent = '';
        rewind( $this->resource );

        while( feof( $this->resource ) === false ){
            $streamContent .= fread( $this->resource, $this->buffer );
        }
        return( $streamContent );
    }
}