<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductDynamicEntityConnector\Communication\Plugin\DynamicEntity;

use Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer;
use Generated\Shared\Transfer\DynamicEntityPostEditResponseTransfer;
use Spryker\Zed\DynamicEntityExtension\Dependency\Plugin\DynamicEntityPostCreatePluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\ProductDynamicEntityConnector\Business\ProductDynamicEntityConnectorFacadeInterface getFacade()
 * @method \Spryker\Zed\ProductDynamicEntityConnector\ProductDynamicEntityConnectorConfig getConfig()
 */
class ProductAbstractLocalizedAttributesDynamicEntityPostCreatePlugin extends AbstractPlugin implements DynamicEntityPostCreatePluginInterface
{
    /**
     * {@inheritDoc}
     * - Requires `DynamicEntityPostEditRequest.tableName` to be set.
     * - Checks if `DynamicEntityPostEditRequest.tableName` is set to one of applicable table names.
     * - Requires `RawDynamicEntity.fields` to be set for each element in `DynamicEntityPostEditRequest.rawDynamicEntities`.
     * - Checks if `spy_product_abstract_localized_attributes` is created and creates product abstract URLs.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DynamicEntityPostEditRequestTransfer $dynamicEntityPostEditRequestTransfer
     *
     * @return \Generated\Shared\Transfer\DynamicEntityPostEditResponseTransfer
     */
    public function postCreate(DynamicEntityPostEditRequestTransfer $dynamicEntityPostEditRequestTransfer): DynamicEntityPostEditResponseTransfer
    {
        return $this->getFacade()->updateProductAbstractUrlByDynamicEntityRequest($dynamicEntityPostEditRequestTransfer);
    }
}
