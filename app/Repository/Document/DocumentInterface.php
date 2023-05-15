<?php

namespace App\Repository\Document;

interface DocumentInterface
{
    public function getAllDocuments();
    public function storeDocument($data);
    public function getDocument($id);
    public function updateDocument($data, $id = null);
    public function deleteDocument($id);
    public function download($filename);
    public function pendingDocument();
}
