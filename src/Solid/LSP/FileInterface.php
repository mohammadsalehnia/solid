<?php

namespace Src\Solid\LSP;

interface FileInterface
{
    public function rename(): void;
    public function move(): void;
    public function copy(): void;
}
