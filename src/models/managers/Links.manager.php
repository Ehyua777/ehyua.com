<?php
class Link
{
    private int $id;
    private string $title, $class, $url;

    //SETTERS//
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function seturl($url)
    {
        $this->url = $url;
    }

    //GETTERS//
    public function id()
    {
        return $this->id;
    }
    public function title()
    {
        return $this->title;
    }
    public function class()
    {
        return $this->class;
    }
    public function url()
    {
        return $this->url;
    }

    // HYDRATATION //
    public function hydrate($data)
    {
        foreach ($data as $attribute => $value) {
            $method = 'set' . ucfirst($attribute);
            if (is_callable(array($this, $method))) {
                $this->$method($value);
            }
        }
    }
    // CONSTRUCTEUR //
    public function __construct($values = array())
    {
        if (!empty($values)) {
            $this->hydrate($values);
        }
    }
}
