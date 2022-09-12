<?php

$creditCardTypes = array(
    array("name" => "visa",     "value" => "visaCard",     "label" => $dictionnary['register.model.creditCardType.visa.label']),
    array("name" => "master",   "value" => "masterCard",   "label" => $dictionnary['register.model.creditCardType.master.label']),
    array("name" => "electron", "value" => "electronCard", "label" => $dictionnary['register.model.creditCardType.electron.label']),
    array("name" => "gold",     "value" => "goldCard",     "label" => $dictionnary['register.model.creditCardType.gold.label']),
);


$radioTypes = array(
    array("id" => "ace",     "value" => "ace",     "label" => $dictionnary['register.model.radio.ace.label']),
    array("id" => "king",   "value" => "king",   "label" => $dictionnary['register.model.radio.king.label']),
    array("id" => "queen", "value" => "queen", "label" => $dictionnary['register.model.radio.queen.label']),
);

$InfoTypes = array(
    array("for" => "name",   "type" => "text",     "label" => $dictionnary['register.person.name']),
    array("for" => "email",   "type" => "email",     "label" => $dictionnary['register.person.email']),
    array("for" => "password", "type" => "password",  "label" => $dictionnary['register.person.password']),
);


$CB_ADD_Types = array(
    array("for" => "name",   "type" => "text",     "label" => "Name"),
    array("for" => "type", "type" => "text",  "label" => "Type"),
);