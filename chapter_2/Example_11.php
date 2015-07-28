<?php
require_once('../autoload.php');

use Document\Domain\DocumentStore;
use Document\Domain\CommandOutputDocument;
use Document\Domain\HtmlDocument;
use Document\Domain\StreamDocument;

    $documentStore = new DocumentStore();

    /*$htmlDoc = new HtmlDocument('https://php.net');
    $documentStore->addDocument($htmlDoc);*/

    $streamDoc = new StreamDocument( fopen('../files/stream.txt', 'rb') );
    $documentStore->addDocument( $streamDoc );

    $cmdDoc = new CommandOutputDocument('cat /etc/hosts');
    $documentStore->addDocument( $cmdDoc );

    print_r($documentStore);