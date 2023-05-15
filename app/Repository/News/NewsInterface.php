<?php

namespace App\Repository\News;

interface NewsInterface
{
    public function getAllNewses();
    public function storeNews($data);
    public function getNews($id);
    public function updateNews($data, $id = null);
    public function deleteNews($id);
    public function deleteNewsImage($id);
    public function deleteNewsImages($id);
    public function pendingNews();
}
