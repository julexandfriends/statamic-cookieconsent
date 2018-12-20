<?php

namespace Statamic\Addons\CookieConsent;

use Statamic\API\File;
use Statamic\API\Parse;
use Statamic\Extend\Tags;

class CookieConsentTags extends Tags
{
    /**
     * The {{ cookie_consent }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $data = [
            "theme" => $this->getConfig("theme", "edgeless"),
            "message" => $this->getConfig("message"),
            "dismiss" => $this->getConfig("dismiss"),
            "link_href" => $this->getConfig("link_href"),
            "link_caption" => $this->getConfig("link_caption"),
            "position" => $this->getConfig("position"),
            "popup_background_color" => $this->getConfig("popup_background_color"),
            "popup_text_color" => $this->getConfig("popup_text_color"),
            "button_background_color" => $this->getConfig("button_background_color"),
            "button_text_color" => $this->getConfig("button_text_color"),
        ];

        $file_path = "{$this->getDirectory()}/resources/views/index.html";
        $file_content = File::get($file_path);

        return Parse::template($file_content, $data);
    }
}
