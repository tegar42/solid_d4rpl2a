<?php
include_once("SocialMedia.php");

interface VideoGroupManager extends SocialMedia
{
    public function callGroupVideo(): void;
}
