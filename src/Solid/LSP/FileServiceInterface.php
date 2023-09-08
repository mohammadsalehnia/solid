<?php

namespace Src\Solid\LSP;

interface FileServiceInterface
{
    public function encode(EncodableFileInterface $file): void;
}
