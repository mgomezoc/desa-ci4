<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Mimes;

class ProjectMediaController extends BaseController
{
    public function image(string $encodedPath): ResponseInterface
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

        $extension = pathinfo($absolutePath, PATHINFO_EXTENSION);
        $mimeType = Mimes::guessTypeFromExtension($extension) ?: 'application/octet-stream';
        $contents = file_get_contents($absolutePath);

        if ($contents === false) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->response
            ->setHeader('Content-Type', $mimeType)
            ->setHeader('Content-Length', (string) filesize($absolutePath))
            ->setCache(['max-age' => 86400, 'public' => true])
            ->setBody($contents);
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
