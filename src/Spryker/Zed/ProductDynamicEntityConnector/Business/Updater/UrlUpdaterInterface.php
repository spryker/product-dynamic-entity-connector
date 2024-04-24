<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductDynamicEntityConnector\Business\Updater;

use Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer;
use Generated\Shared\Transfer\DynamicEntityPostEditResponseTransfer;

interface UrlUpdaterInterface
{
    /**
     * @param \Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer $dynamicEntityPostEditRequestTransfer
     *
     * @return \Generated\Shared\Transfer\DynamicEntityPostEditResponseTransfer
     */
    public function updateProductAbstractUrlByDynamicEntityRequest(
        DynamicEntityPostEditRequestTransfer $dynamicEntityPostEditRequestTransfer
    ): DynamicEntityPostEditResponseTransfer;
}
