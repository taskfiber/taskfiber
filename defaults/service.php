<?php
namespace TaskFiber\Core;

$this->addService('config', ConfigProvider::class);
$this->addService('request', RequestProvider::class);
$this->addService('router', RouterProvider::class);
$this->addService('session', 'SessionProvider');
$this->addService('authenticate', 'Authenticate');
$this->addService('query', 'QueryFactory');