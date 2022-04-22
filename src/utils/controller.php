<?php
// declare (strict_types = 1);

namespace App;

require_once "src/View.php";

class Controller
{
    private const DEFAULT_ACTION = 'list';
    private $getData;
    private $postData;

    public function __construct(array $getData, array $postData)
    {
        $this->postData = $postData;
        $this->getData = $getData;
    }

    public function run(): void
    {
        $action = $this->getData['action'] ?? self::DEFAULT_ACTION;

        $view = new View();
        $viewsParams = [];

        switch ($action) {
            case 'create':
                $page = 'create';
                $created = false;
                $page = "create";
                if (!empty($this->postData)) {
                    $viewsParams = [
                        'title' => $this->postData['title'],
                        'description' => $this->postData['description'],
                    ];
                }

                $viewsParams['created'] = $created;
                break;

            case 'show':
                $viewsParams = [
                    'title' => 'Moja notatka',
                    'description' => 'Opis',

                ];
                break;
            default:
                $page = "list";
                $viewsParams['resultList'] = "wyświetlamy notatki";
                break;

        }
        $view->render($page, $viewParams);
    }
}