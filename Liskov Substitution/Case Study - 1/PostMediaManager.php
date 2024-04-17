<?php
include_once("SocialMedia.php");

interface PostMediaManager extends SocialMedia
{
    public function publishPost(): void;
}
