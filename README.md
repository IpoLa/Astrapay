
# AstraPay Payment Gateway for WooCommerce
Accept cryptocurrency payments on your WooCommerce website

### Requirements:

```
PHP >= 5.5
Wordpress >= 4.0
WooCommerce >= 2.4
```

### Description

Accept payments in Bitcoin, AstraTokens, Bitcoin Cash, Litecoin, Ethereum, Monero and IOTA directly to your crypto wallet, without any sign-ups or lengthy processes.
All you need is to provide your crypto address.

#### Allow users to pay with crypto directly on your store

The AstraPay plugin extends WooCommerce, allowing you to get paid in crypto directly on your store, with a simple setup and no sign-ups required.

Currently accepted cryptocurrencies are:

* (BTC) Bitcoin
* (ASTS) AstraTokens
* (BCH) Bitcoin Cash
* (LTC) Litecoin
* (ETH) Ethereum
* (XMR) Monero
* (IOTA) IOTA

AstraPay will attempt to automatically convert the value you set on your store to the cryptocurrency your customer chose.
Exchange rates are fetched hourly from CoinMarketCap.

Supported currencies for automatic exchange rates are:

* (USD) United States Dollar
* (DZD) Algerian Dinars
* (EUR) Euro
* (GBP) Great Britain Pound
* (JPY) Japanese Yen
* (CNY) Chinese Yuan
* (INR) Indian Rupee
* (CAD) Canadian Dollar
* (HKD) Hong Kong Dollar
* (BRL) Brazilian Real
* (DKK) Danish Krone
* (MXN) Mexican Peso
* (AED) United Arab Emirates Dirham

If your WooCommerce's currency is none of the above, the exchange rates will default to USD.
If you're using WooCommerce in a different currency not listed here and need support, please [contact us](https://astrapay.io)

#### Why choose AstraPay?

AstraPay has no setup fees, no monthly fees, no hidden costs, and you don't even need to sign-up!
Simply set your crypto addresses and you're ready to go. As soon as your customers pay we forward your earnings directly to your own wallet.

AstraPay has a low 5 DZD fee on the transactions processed. No hidden costs.
For more info on our fees [click here](https://astrapay.io/fees)

### Installation

#### Using The WordPress Dashboard

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Astrapay Payment Gateway for WooCommerce'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

#### Uploading in WordPress Dashboard

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `woocommerce-astrapay.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

#### Using FTP

1. Download `woocommerce-astrapay.zip`
2. Extract the `woocommerce-astrapay` directory to your computer
3. Upload the `woocommerce-astrapay` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

#### Updating

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.

### Configuration

1. Go to WooCommerce settings
2. Select the "Payments" tab
3. Activate the payment method (if inactive)
4. Set the name you wish to show your users on Checkout (for example: "Cryptocurrency")
5. Fill the payment method's description (for example: "Pay with cryptocurrency")
6. Select which cryptocurrencies you wish to accept (control + click to select many)
7. Input your addresses to the cryptocurrencies you selected. This is where your funds will be sent to, so make sure the addresses are correct.
8. Click "Save Changes"
9. All done!

### Frequently Asked Questions

#### Do I need an API key?

No. You just need to insert your crypto address of the cryptocurrencies you wish to accept. Whenever a customer pays, the money will be automatically and instantly forwarded to your address.

#### How long do payments take before they're confirmed?

This depends on the cryptocurrency you're using. Bitcoin usually takes up to 11 minutes, Ethereum usually takes less than a minute, and AstraTokens are Instantly.

#### Is there a minimum for a payment?

Yes, the minimums change according to the chosen cryptocurrency and can be checked [here](https://astrapay.io/fees).
If the WooCommerce order total is below the chosen cryptocurrency's minimum, an error is raised to the user.


#### Where can I get support? 

The easiest and fastest way is via github tickets

### Screenshots

1. The settings panel used to configure the gateway.
2. Normal checkout with AstraPay.
3. Standard payment page with QR-Code.
4. Awaiting payment confirmation
5. Payment confirmed

### Changelog 

#### 1.0
* Initial release.

### Upgrade Notice
* Initial release.