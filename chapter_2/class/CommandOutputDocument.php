<?php
namespace Document \ Domain;
use Document\DomainInterface\Documentable;

/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:34 AM
 */



class CommandOutputDocument implements Documentable {

    protected $command;

    public function __construct($command){
        $this->command = $command;
    }

    public function getId()
    {
        return( $this->command );
    }

    public function getContent()
    {
        return( shell_exec($this->command) );
    }
}