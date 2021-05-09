<?php

/*
 * This file is part of the Panther project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\Panther;

use PHPUnit\Framework\ReportAttachmentProviding;

if (\interface_exists(ReportAttachmentProviding::class)) {
    interface ScreenshotProvidingTestCase extends ReportAttachmentProviding
    {
    }
} else {
    interface ScreenshotProvidingTestCase
    {
    }
}
