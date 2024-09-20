<?php

return [
    \Src\Application\DTOs\Auth\LoginCommand::class => \Src\Application\UseCases\Auth\LoginHandler::class,
    \Src\Application\DTOs\Auth\ProfileCommand::class => \Src\Application\UseCases\Auth\ProfileHandler::class,
    \Src\Application\DTOs\Auth\RegisterCommand::class => \Src\Application\UseCases\Auth\RegisterHandler::class,
];
