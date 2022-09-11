<?php

interface MonInterface1
{
    const PI = 3.1415;
    public function un();
    public function deux();
}

interface MonInterface2
{
    public function trois();
    public function quatre();
}

//$maclasse = new MonInterface1;

class Implementation implements MonInterface1, MonInterface2
{
    public function un()
    {
        return 1 . '<hr />';
    }

    public function deux()
    {
        return 2 . '<hr />';
    }
    public function trois()
    {
        return 3 . '<hr />';
    }

    public function quatre()
    {
        return 4 . '<hr />';
    }
}

$maclasse = new Implementation();
echo $maclasse->un();
echo $maclasse->deux();
echo $maclasse->trois();
echo $maclasse->quatre();
