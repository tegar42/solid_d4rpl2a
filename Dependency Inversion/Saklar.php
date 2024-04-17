<?php

class Saklar
{
    private BarangElektronik $item;
    private bool $keaktifan = false;

    public function __construct(BarangElektronik $item)
    {
        $this->item = $item;
    }

    public function berubah(): void
    {
        if ($this->keaktifan) {
            echo $this->item->beroperasi();
        } else {
            echo $this->item->berhenti();
        }
    }
}
