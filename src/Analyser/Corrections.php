<?php

namespace WhichBrowser\Analyser;

use WhichBrowser\Constants;
use WhichBrowser\Model\Version;

trait Corrections
{
    private function &applyCorrections()
    {
        if (isset($this->data->device->model)) {
            $this->hideDeviceModelIfMatchesLanguage();
        }

        if (isset($this->data->browser->name) && isset($this->data->os->name)) {
            $this->hideBrowserBasedOnOperatingSystem();
        }

        if (isset($this->data->browser->name) && isset($this->data->os->name)) {
            $this->correctVersionOfMobileInternetExplorer();
        }

        if (isset($this->data->browser->name) && $this->data->device->type == Constants\DeviceType::TELEVISION) {
            $this->hideBrowserOnDeviceTypeTelevision();
        }

        if (isset($this->data->browser->name) && $this->data->device->type == Constants\DeviceType::GAMING) {
            $this->hideBrowserOnDeviceTypeGaming();
        }

        if ($this->data->device->type == Constants\DeviceType::TELEVISION) {
            $this->hideOsOnDeviceTypeTelevision();
        }

        if (isset($this->data->browser->name) && isset($this->data->engine->name)) {
            $this->fixMidoriEngineName();
        }

        if (isset($this->data->browser->name) && isset($this->data->engine->name)) {
            $this->fixNineSkyEngineName();
        }

        if (isset($this->data->browser->name) && isset($this->data->browser->family)) {
            $this->hideFamilyIfEqualToBrowser();
        }

        return $this;
    }


    private function hideFamilyIfEqualToBrowser()
    {
        if ($this->data->browser->name == $this->data->browser->family->name) {
            unset($this->data->browser->family);
        }
    }

    private function hideDeviceModelIfMatchesLanguage()
    {
        if (!$this->data->device->identified) {
            if (preg_match('/^[a-z][a-z]-[a-z][a-z]$/u', $this->data->device->model)) {
                $this->data->device->model = null;
            }
        }
    }

    private function fixMidoriEngineName()
    {
        if ($this->data->browser->name == 'Midori' && $this->data->engine->name != 'Webkit') {
            $this->data->engine->name = 'Webkit';
            $this->data->engine->version = null;
        }
    }

    private function fixNineSkyEngineName()
    {
        if ($this->data->browser->name == 'NineSky' && $this->data->engine->name != 'Webkit') {
            $this->data->engine->name = 'Webkit';
            $this->data->engine->version = null;
        }
    }

    private function correctVersionOfMobileInternetExplorer()
    {
        if ($this->data->os->name == 'Windows Phone' && $this->data->browser->name == 'Mobile Internet Explorer') {
            if ($this->data->os->version->toFloat() == 8.0 && $this->data->browser->version->toNumber() < 10) {
                $this->data->browser->version = new Version([ 'value' => '10' ]);
            }

            if ($this->data->os->version->toFloat() == 8.1 && $this->data->browser->version->toNumber() < 11) {
                $this->data->browser->version = new Version([ 'value' => '11' ]);
            }
        }
    }

    private function hideBrowserBasedOnOperatingSystem()
    {
        if ($this->data->os->name == 'iOS' && $this->data->browser->name == 'Safari') {
            $this->data->browser->hidden = true;
        }

        if ($this->data->os->name == 'Series60' && $this->data->browser->name == 'Internet Explorer') {
            $this->data->browser->reset();
            $this->data->engine->reset();
        }

        if ($this->data->os->name == 'Series80' && $this->data->browser->name == 'Internet Explorer') {
            $this->data->browser->reset();
            $this->data->engine->reset();
        }

        if ($this->data->os->name == 'Tizen' && $this->data->browser->name == 'Chrome') {
            $this->data->browser->reset([
                'family' => isset($this->data->browser->family) ? $this->data->browser->family : null
            ]);
        }

        if ($this->data->os->name == 'Ubuntu Touch' && $this->data->browser->name == 'Chromium') {
            $this->data->browser->reset([
                'family' => isset($this->data->browser->family) ? $this->data->browser->family : null
            ]);
        }
    }

    private function hideBrowserOnDeviceTypeGaming()
    {
        if (isset($this->data->device->model) && $this->data->device->model == 'Playstation 2' && $this->data->browser->name == 'Internet Explorer') {
            $this->data->browser->reset();
        }
    }

    private function hideBrowserOnDeviceTypeTelevision()
    {
        switch ($this->data->browser->name) {
            case 'Firefox':
                if (!$this->data->isOs('Firefox OS')) {
                    unset($this->data->browser->name);
                    unset($this->data->browser->version);
                }
                break;

            case 'Internet Explorer':
                $valid = false;

                if (isset($this->data->device->model) && in_array($this->data->device->model, [ 'WebTV' ])) {
                    $valid = true;
                }

                if (!$valid) {
                    unset($this->data->browser->name);
                    unset($this->data->browser->version);
                }

                break;

            case 'Chrome':
            case 'Chromium':
                $valid = false;
                
                if (isset($this->data->os->name) && in_array($this->data->os->name, [ 'Google TV', 'Android' ])) {
                    $valid = true;
                }
                if (isset($this->data->device->model) && in_array($this->data->device->model, [ 'Chromecast' ])) {
                    $valid = true;
                }

                if (!$valid) {
                    unset($this->data->browser->name);
                    unset($this->data->browser->version);
                }

                break;
        }
    }

    private function hideOsOnDeviceTypeTelevision()
    {
        if (isset($this->data->os->name) && !in_array($this->data->os->name, [ 'Aliyun OS', 'Tizen', 'Android', 'Android TV', 'FireOS', 'Google TV', 'Firefox OS' ])) {
            $this->data->os->reset();
        }
    }
}
