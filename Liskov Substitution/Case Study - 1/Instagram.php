<?php
include_once("PostMediaManager.php");

class Instagram implements PostMediaManager
{
    public function chat(): void
    {
        echo "Chatting... <br>";
    }
    public function sendPhotosAndVideos(): void
    {
        echo "Sending media file... <br>";
    }
    public function publishPost(): void
    {
        echo "Posting... <br>";
    }
}
