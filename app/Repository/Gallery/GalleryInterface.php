<?php
    namespace App\Repository\Gallery;

    interface GalleryInterface
    {
        public function getAllImages();
        public function storeImages($data);
        public function showImages();
        public function deleteImages($id);
        public function pendingImages();
    }
?>
