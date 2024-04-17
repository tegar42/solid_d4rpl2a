<?php
include_once("VideoGroupManager.php");

class Whatsapp implements VideoGroupManager
{
    public function chat(): void
    {
        echo "Chatting... <br>";
    }
    public function sendPhotosAndVideos(): void
    {
        echo "Sending media file... <br>";
    }
    public function callGroupVideo(): void
    {
        echo "Do Group Call... <br>";
    }
}
