/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
        'jquery',
        'Magento_Customer/js/model/authentication-popup',
        'Magento_Customer/js/customer-data',
        'mage/url'
    ],
    function ($, authenticationPopup, customerData,url) {
        'use strict';

        return function (config, element) {
            $(element).click(function (event) {
                var cart = customerData.get('cart'),
                    customer = customerData.get('customer');

                event.preventDefault();

                if (!customer().firstname && cart().isGuestCheckoutAllowed === false) {
                    //authenticationPopup.showModal();
                     location.href = url.build('customer/account/login');
                    return false;
                }
                location.href = config.checkoutUrl;
            });

        };
    }
);
