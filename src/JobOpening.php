<?php
    class JobOpening
    {
        private $title;
        private $descrip;
        private $contact;

        function __construct($title, $descrip, $contact)
        {
            $this->title = $title;
            $this->descrip = $descrip;
            $this->contact = $contact;
        }

        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDescrip($new_descrip)
        {
            $this->descrip = $new_descrip;
        }

        function getDescrip()
        {
            return $this->descrip;
        }

        function setContact($new_contact)
        {
            $this->contact = $new_contact;
        }

        function getContact()
        {
            return $this->contact;
        }
    }
?>
