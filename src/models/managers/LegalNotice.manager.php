<?php
class LegalNoticeManager
{
    private int $id;
    private string $title, $subtitle, $content;
    private int $year;
    private $date;

    // SETTERS //
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setYear($year)
    {
        $this->year = date("Y");
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    // GETTERS //
    public function date()
    {
        return $this->date;
    }
    public function title()
    {
        return $this->title;
    }
    public function subtitle()
    {
        return $this->subtitle;
    }
    public function content()
    {
        return $this->content;
    }
    public function year()
    {
        return $this->year;
    }
    public function id()
    {
        return $this->id;
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
