<?php

/*
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Cloud\Core\Logger;

use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Formatter\FormatterInterface;
use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Handler\StreamHandler;
use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Logger;
/**
 * Monolog 2.x handler for logging on App Engine flexible environment.
 *
 * If you are using Monolog 1.x, use {@see \Google\Cloud\Core\Logger\AppEngineFlexHandler} instead.
 */
class AppEngineFlexHandlerV2 extends StreamHandler
{
    /**
     * @param int $level [optional] The minimum logging level at which this
     *        handler will be triggered.
     * @param Boolean $bubble [optional] Whether the messages that are handled
     *        can bubble up the stack or not.
     * @param int|null $filePermission [optional] Optional file permissions
     *        (default (0640) are only for owner read/write).
     * @param Boolean $useLocking [optional] Try to lock log file before doing
     *        any writes.
     * @param resource|string|null $stream [optional]
     */
    public function __construct($level = Logger::INFO, $bubble = \true, $filePermission = 0640, $useLocking = \false, $stream = null)
    {
        if ($stream === null) {
            $pid = \getmypid();
            $stream = "file:///var/log/app_engine/app.{$pid}.json";
        }
        parent::__construct($stream, $level, $bubble, $filePermission, $useLocking);
    }
    protected function getDefaultFormatter() : FormatterInterface
    {
        return new AppEngineFlexFormatterV2();
    }
}
