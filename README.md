# Mobi2Go Silverstripe

This Silverstripe module allows you to easily embed
the Mobi2Go store front into your existing Silverstripe
site.

## What is Mobi2Go

Mobi2Go is an integrated web and mobile system for your hospitality business.
It's all your restaurant or cafe needs for online ordering and increased revenue
generation.

Mobi2Go can help with:

### Online ordering
Our online ordering can be embedded directly into your existing website and
styled to match your brand, ensuring seamless integration with your existing
website and a unified customer experience.

### Customer Ordering
Our online storefront has a comprehensive suite of features, allowing your
customers to recall previous orders, customise products, schedule orders,
redeem vouchers and pay for their order on pick-up / delivery or prepay by
credit card.

### Mobile Ordering
Our mobile ordering supports both Android and iOS and can be customised to
match the look and feel of your brand, while providing customers the freedom
to order from your stores while on the go.

Check out examples of our work and start your 30 day free trial at: [http://www.mobi2go.com](http://www.mobi2go.com)

## Installation

There are two steps required to setup this module.

### 1) Sign up to Mobi2Go

**If you already have a Mobi2Go account you can skip this step.**

  * Go to [http://mobi2go.com/signup](http://mobi2go.com/signup) and sign up.
  * Setup a store & menu
  * Go to step 2

### 2) Install the Mobi2Go module

First of all you will need to know your Store Name, you can get this from
the website tab in the Mobi2Go console.

The Store Name is the first part of the external domain, eg. demo.mobi2go.com
has the Store Name of demo.

Composer is the recommended way to install this module.

Add the following to our composer.json file:

    {
        "require": {
            "chtombleson/mobi2go-silverstripe": "~0.1"
        }
    }

Now run `composer update`.

Login to the admin section of your and go to http://yoursite/dev/build

Now you can add Mobi2Go store front to your site by creating a new Mobi2Go Page.