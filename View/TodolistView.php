<?php
namespace View {
    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService->showTodolist();
        }

        function showTodolist(): void {
            $this->todolistService->showTodolist();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "3. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");

            if ($pilihan == "1") {
                $this->addTodolist();
            } else if ($pilihan == "2") {
                $this->removeTodolist();
            } elseif ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
            echo "Sampai Jumpa lagi" . PHP_EOL;
        }

        function addTodolist(): void {
            echo "MENAMBAH FOTO";
            $todo = InputHelper::input("Todo (x untuk batal)");
            if ($todo == "x") {
                echo "Batal menambahkan todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }

        }
    }
}