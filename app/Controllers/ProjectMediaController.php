<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class ProjectMediaController extends BaseController
{
    public function image(string $encodedPath)
    {
        $relativePath = $this->decodePath($encodedPath);

        if ($relativePath === null || ! str_starts_with($relativePath, 'assets/images/proyectos/')) {
            throw PageNotFoundException::forPageNotFound();
        }

        $normalizedPath = str_replace(['\\', '..'], ['/', ''], $relativePath);
        $absolutePath = rtrim(FCPATH, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . ltrim($normalizedPath, '/');

        if (! is_file($absolutePath)) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->response->setFile($absolutePath);
    }

    private function decodePath(string $encodedPath): ?string
    {
        $base64 = strtr($encodedPath, '-_', '+/');
        $padding = strlen($base64) % 4;

        if ($padding > 0) {
            $base64 .= str_repeat('=', 4 - $padding);
        }

        $decoded = base64_decode($base64, true);

        return is_string($decoded) && $decoded !== '' ? $decoded : null;
    }
}
