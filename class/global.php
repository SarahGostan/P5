<?php


class Project_Twig_Extension extends Twig_Extension implements Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
		$auth = new UserSession();
		$id = $auth->getId();
        return [
            'id' => $id
        ];
    }

}