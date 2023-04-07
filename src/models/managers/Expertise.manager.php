<?php
class Expertise
{
    private int $id;
    private string $h2, $h3, $webDevImageUrl, $mobileDevImageUrl, $designImageUrl;

    //SETTERS//
    public function setId($id)
    {
        $this->id = $id;
    }
    public function seth3($h3)
    {
        $this->h3 = $h3;
    }
    public function setH2($h2)
    {
        $this->h2 = $h2;
    }
    public function setWebDevImageUrl($webDevImageUrl)
    {
        $this->webDevImageUrl = $webDevImageUrl;
    }
    public function setMobileDevImageUrl($mobileDevImageUrl)
    {
        $this->mobileDevImageUrl = $mobileDevImageUrl;
    }
    public function setDesignImageUrl($designImageUrl)
    {
        $this->designImageUrl = $designImageUrl;
    }

    //GETTERS//
    public function id()
    {
        return $this->id;
    }
    public function h3()
    {
        return $this->h3;
    }
    public function h2()
    {
        return $this->h2;
    }
    public function webDevImageUrl()
    {
        return $this->webDevImageUrl;
    }
    public function mobileDevImageUrl()
    {
        return $this->mobileDevImageUrl;
    }
    public function designImageUrl()
    {
        return $this->designImageUrl;
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
