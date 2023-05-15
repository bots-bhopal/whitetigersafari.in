<?php

namespace App\Repository\Tender;

interface TenderInterface
{
    public function getAllTenders();
    public function storeTender($data);
    public function getTender($id);
    public function updateTender($data, $id = null);
    public function deleteTender($id);
    public function download($filename);
    public function pendingTender();
}
