<?php
namespace Document \ DomainInterface;

/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 6/22/15
 * Time: 8:25 AM
 */

interface Documentable {
    public function getId();
    public function getContent();
}