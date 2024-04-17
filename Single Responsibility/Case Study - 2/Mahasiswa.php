<?php

class Mahasiswa
{
    private string $nim;
    private string $nama;

    public function __construct(string $nim, string $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }
}
