<?php
class Card
{
    private int    $id, $isActivated;
    private string $subject, $content, $imageUrl;

    //SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function setContect($content)
    {
        $this->content = $content;
    }
    public function setPhotoUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    //GUETTERS
    public function id()
    {
        return $this->id;
    }
    public function isActivated()
    {
        return $this->isActivated;
    }
    public function subject()
    {
        return $this->subject;
    }
    public function content()
    {
        return $this->content;
    }
    public function imageUrl()
    {
        return $this->imageUrl;
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
