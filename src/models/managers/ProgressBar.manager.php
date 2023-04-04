<?php
class ProgressBar
{
    public int    $id;
    public string $skill;
    public string $className;
    public int    $level;
    public string $category;

    public function __construct($skill = '', $className = '', $level = 0, $category = '')
    {
        $this->skill = $skill;
        $this->className = $className;
        $this->level = $level;
        $this->category = $category;
    }
}
