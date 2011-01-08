<?php

namespace Assetic\Asset;

use Assetic\AssetManager;
use Assetic\Filter\FilterInterface;

/**
 * A reference to an asset in the asset manager.
 *
 * @author Kris Wallsmith <kris.wallsmith@gmail.com>
 */
class AssetReference implements AssetInterface
{
    private $am;
    private $name;

    public function __construct(AssetManager $am, $name)
    {
        $this->am = $am;
        $this->name = $name;
    }

    public function ensureFilter(FilterInterface $filter)
    {
        $this->am->get($this->name)->ensureFilter($filter);
    }

    public function load()
    {
        $this->am->get($this->name)->load();
    }

    public function dump()
    {
        return $this->am->get($this->name)->dump();
    }

    public function getContent()
    {
        return $this->am->get($this->name)->getContent();
    }

    public function setContent($content)
    {
        $this->am->get($this->name)->setContent($content);
    }
}
