<?php
class LyricsController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function handleRequest() {
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = isset($_POST['name']) ? $_POST['name'] : 'Anonymous';
            $lyrics = $_POST['lyrics'];
            $this->model->addLyrics($name, $lyrics);
        }

        $lyrics = empty($searchQuery) ? $this->model->getAllLyrics() : $this->model->searchLyricsByName($searchQuery);
        $this->view->renderForm($searchQuery);
        $this->view->renderLyrics($lyrics);
    }
}
?>
