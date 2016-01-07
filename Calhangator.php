<?php

/**
 * Created by PhpStorm.
 * User: om3rcitak
 * Date: 7.1.2016
 * Time: 21:50
 */
class Calhangator
{
    public $profile_picture = "http://www.gravatar.com/avatar/508a80376c9040237be93e9131fa0853";
    public $he_firstname = "";
    public $he_lastname = "";
    public $me_name = "";
    public $me_job = "";

    /**
     *
     * render is template
     * @author Omer Citak <mail@omercitak.com>
     */
    public function render()
    {
        $template = file_get_contents("assets/template.tpl");
        $template = str_replace(
            ['{profile_picture}', '{him_firstname}', '{him_fullname}', '{you_name}', '{you_job}'],
            [$this->profile_picture, $this->he_firstname, $this->he_firstname . ' ' . $this->he_lastname, $this->me_name, $this->me_job],
            $template
        );
        echo $template;
    }
}