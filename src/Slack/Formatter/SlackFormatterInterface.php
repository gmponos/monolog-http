<?php

declare(strict_types=1);

namespace MonologHttp\Slack\Formatter;

use Monolog\Formatter\FormatterInterface;

/**
 * This is an Interface that all formatters must extend in order to be passed into SlackWebhookHandler
 */
interface SlackFormatterInterface extends FormatterInterface
{
}
