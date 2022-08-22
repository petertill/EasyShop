<h1 align="center"> EasyShop </h1> <br>

<p align="center">
  A complete user-friendly online webshop made with PHP OOP & MySQL.
</p>

<p align="center">
  <a href="https://itunes.apple.com/us/app/gitpoint/id1251245162?mt=8">
    <img alt="Download on the App Store" title="App Store" src="http://i.imgur.com/0n2zqHD.png" width="140">
  </a>

  <a href="https://play.google.com/store/apps/details?id=com.gitpoint">
    <img alt="Get it on Google Play" title="Google Play" src="http://i.imgur.com/mtGRPuM.png" width="140">
  </a>
</p>

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
## Table of Contents

- [Introduction](#introduction)
- [Contact me](#contact-me)
- [Features](#features)
- [Feedback](#feedback)
- [Contributors](#contributors)
- [Build Process](#build-process)
- [Acknowledgments](#acknowledgments)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Introduction

Complete php webshop script made with PHP OOP & MySQL. It has an easy-to-use installer so you can install it with two clickes. View & add goods to chart, you can also search for a specific product, or browse the recommended section.

## Contact me
[![Gitter chat](https://img.shields.io/badge/chat-on_gitter-008080.svg?style=flat-square)](https://gitter.im/petertill/community)


**Available for only desktop use**

<p align="center">
  <img src = "http://i.imgur.com/HowF6aM.png" width=350>
</p>

## Features

The following features are included in this software:

**Admin:**

* Admin panel (for the seller)
* Can upload goods with a .csv file
* Built-in installer to configure the webshop details, database connection and more in one step
* Can create categories and add products to it
* Can view full list of products
* Can delete products
* Can update products
* Can add products one by one
* Can view salaries & income


<p align="center">
  <img src = "http://i.imgur.com/IkSnFRL.png" width=700>
</p>

**User/Visitor:**

* Can browse goods
* Can search for specific product
* Can add products to cart
* Can purchase products
* Can view product details

<p align="center">
  <img src = "http://i.imgur.com/0iorG20.png" width=700>
</p>

## Feedback

Feel free to send me feedback on [Gitter](https://gitter.im/petertill/community/) so I can make the project better!

If there's anything you'd like to chat about, please feel free to contact me on Discord (**petyadev#1129**)!

## Contributors

This software was made by **[Peter Till](https://github.com/petertill)**

## Build Process

- Make sure that you have the latest installation of PHP, MySQL, Apache on your machine.
- Copy the source code (the files and folders located inside the same directory as this documentation) files into your web server's root folder
- Make the file(s) and folder(s) visible and writeable to everyone so the installer is able to configure your webshop
- Open your website with the installer inside a desktop browser. The URL should be `www.yourdomain.com/installer/`.
- Fill out the `Shop name`, `Shop description`, `Support email` and `Company localisation` fields
- Fill out the `System configuration` box's fields with your database and it's credentials. If you aren't sure, contact your network administrator, the IT team or the web hosting provider.
- Decide your admin username and password. You will be able to log into the admin panel with these, so make sure you will remember your password but other people can't guess it.
- Click the `Next` button
- Follow the instructions on the page to remove the installer. It is recommended for security.

Please take a look at the [contributing guidelines](./CONTRIBUTING.md) for a detailed process on how can you contribute to this project.

**Development Keys**: The `CLIENT_ID` and `CLIENT_SECRET` in `api/index.js` are for development purposes and do not represent the actual application keys. Feel free to use them or use a new set of keys by creating an [OAuth application](https://github.com/settings/applications/new) of your own. Set the "Authorization callback URL" to `gitpoint://welcome`.


## Acknowledgments

Thanks to [JetBrains](https://www.jetbrains.com) for supporting us with a [free Open Source License](https://www.jetbrains.com/buy/opensource).
