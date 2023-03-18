<?php
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=ehyua;charset=utf8', 'Ehyua777', 'Ehyu@777');

        return $database;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getProgressBars(string $category): array
{
    $database = dbConnect();
    $getProgressBarQuery = 'SELECT * FROM progress_bar WHERE category = "' . $category . '" ORDER BY id ASC';
    if (!$database) {
        die('La connexion à la base de données a échoué.');
    }
    try {
        $statement = $database->prepare($getProgressBarQuery);
        $statement->execute();
    } catch (\Exception $err) {
        die('error[' . $err->getCode() . '] ' . $err->getMessage());
    }
    $progressBars = [];
    while ($row = $statement->fetch()) {
        $progressBar = new ProgressBar();
        $progressBar->id    = $row['id'];
        $progressBar->skill = $row['skill'];
        $progressBar->className = $row['className'];
        $progressBar->level = $row['level'];
        $progressBar->category = $row['category'];

        $progressBars[] = $progressBar;
    }

    return $progressBars;
}
