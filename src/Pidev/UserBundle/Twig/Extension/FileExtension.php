<?php

namespace Pidev\UserBundle\Twig\Extension;


class FileExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */


    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('file_exists', 'file_exists'),
        );
    }

    public function file_exists($file_path)
    {
        if(@is_array(getimagesize($file_path))){
            $image = true;
        } else {
            $image = false;
        }

    return $image ;
    }

    public function getName()
    {
        return 'app_file';
    }
}
