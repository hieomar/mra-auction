# MRA Online Auction

An online web auction platform for the Malawi Revenue Authority.

## Table of Contents

- [MRA Online Auction](#mra-online-auction)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Requirements](#requirements)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Folder Structure](#folder-structure)
  - [License](#license)

## Introduction

Welcome to the MRA Online Auction platform. This project provides a secure and transparent platform for auctioning items online, promoting fair competition and economic growth in Malawi.

## Requirements

- PHP 8.0 or higher
- Composer
- Web server (e.g., Apache, Nginx)

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/hieomar/mra-auction.git
    cd mra-auction
    ```

2. Install dependencies using Composer:

    ```sh
    composer install
    ```

3. Run the command in the root of the project to start the php server
    ```sh
    php -S 127.0.0.1:8000
    ```
## Usage

1. Start your web server and navigate to the project URL (`http://localhost`).
2. You should see the home page of the MRA Online Auction platform.
3. Use the navigation links to explore different pages (Home, Auctions, About Us).
4. Click on an auction item to view its details and place bids.
5. Use the login and register buttons to authenticate as a user.

## Folder Structure
```sh
├───public
│   ├───css
│   └───images
├───src
│   ├───controllers
│   ├───models
│   ├───services
│   └───utils
├───storage
│   ├───logs
│   └───uploads
└───templates
    ├───layouts
    ├───pages
    └───partials
```

## License

This project is licensed under the MIT License. See the [LICENSE].
