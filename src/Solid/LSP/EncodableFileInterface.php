<?php

namespace Src\Solid\LSP;

interface EncodableFileInterface extends FileInterface
{
    public function encode(): void;
}
