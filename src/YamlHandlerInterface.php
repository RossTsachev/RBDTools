<?php

namespace RBDTools;

interface YamlHandlerInterface
{
    public function read($filename);

    public function write($data, $filename);
}
