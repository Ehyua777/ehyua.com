<?php
class Carousel
{
    private int    $id, $cardId;
    private string $label, $placeholder, $imageUrl, $class;

    //SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }
    public function setPhotoUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }


    //GUETTERS
    public function id()
    {
        return $this->id;
    }
    public function cardId()
    {
        return $this->cardId;
    }
    public function label()
    {
        return $this->label;
    }
    public function placeholder()
    {
        return $this->placeholder;
    }
    public function imageUrl()
    {
        return $this->imageUrl;
    }
    public function class()
    {
        return $this->class;
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
