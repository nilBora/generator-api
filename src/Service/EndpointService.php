<?php

namespace Jtrw\ApiCreator\Service;

use Jtrw\ApiCreator\Model\ConfigModel;
use Jtrw\ApiCreator\ValueObject\Path;
use Symfony\Component\HttpFoundation\Request;

class EndpointService
{
    private ConfigModel $configModel;
    private Request $request;
    
    public function __construct(ConfigModel $configModel, Request $request)
    {
        $this->configModel = $configModel;
        $this->request = $request;
    }
    
    public function start()
    {
        $currentUri = $this->request->getRequestUri();

        $paths = $this->configModel->getPaths()->toNative();
        foreach ($paths as $path) {
            if ($this->isMatchPathWithCurrentUri($path, $currentUri)) {
                foreach ($path->getMethods() as $method) {
                    if ($method->getName() === $this->request->getMethod()) {
                        //do something
                    }
                }
            }
        }
    }
    
    private function isMatchPathWithCurrentUri(Path $path, string $currentUri)
    {
        return $path->getName() === $currentUri;
    }
}
