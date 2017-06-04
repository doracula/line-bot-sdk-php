<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: '<FdLdAhuM+CTiHgVsYyrugWcLGgM0h7/FaOHOnxdphAepk8AzOEeDGLBG4wEQ3GTJe9E1WIdhb8lPJX5V+Fz2VWSZcklbjjFJa4D9IoaFtOcQLSM/JiyCNiDNO7lTBJRnIi6+1O/1F6jRDLlwjQ+wNgdB04t89/1O/w1cDnyilFU=>',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '<a8259aabf44d80ab39a7bd5cffb94cdd>',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
