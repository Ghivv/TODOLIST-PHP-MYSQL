<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\Todolist;
use \Repository\TodolistRepository;
use \Service\TodolistService;
use \View\TodolistView;

function testViewShowTodolist(): void {
    $todolistReposiry = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistReposiry);
    $todolistView = new TodolistView($todolistService);
    
    $todolistService->addTodolist("Belajar PHP ");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}

function testViewAddTodolist(): void {
    $todolistReposiry = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistReposiry);
    $todolistView = new TodolistView($todolistService);
    
    $todolistService->addTodolist("Belajar PHP ");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}

testViewRemoveTodolist();