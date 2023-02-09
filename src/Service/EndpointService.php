<?php

namespace Jtrw\ApiCreator\Service;

use Jtrw\ApiCreator\Model\ConfigModel;
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
            foreach ($path->getMethods() as $method) {
                echo $method->getName();
            }
        }
        
    }
}
