define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'mito_payment',
                component: 'Magenest_MitoPayment/js/view/payment/method-renderer/mito_payment'
            }
        );
        return Component.extend({});
    }
);