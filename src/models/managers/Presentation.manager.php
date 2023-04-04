<?php
class Presentation
{
    private int $id;
    private string $h1, $h2, $photoUrl, $date;

    //SETTERS//
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setH1($h1)
    {
        $this->h1 = $h1;
    }
    public function setH2($h2)
    {
        $this->h2 = $h2;
    }
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    //GETTERS//
    public function id()
    {
        return $this->id;
    }
    public function h1()
    {
        return $this->h1;
    }
    public function h2()
    {
        return $this->h2;
    }
    public function photoUrl()
    {
        return $this->photoUrl;
    }
    public function date()
    {
        return $this->date();
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
