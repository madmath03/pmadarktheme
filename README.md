## A dark minimal theme for phpMyAdmin 4.6.x.x

---
This theme is simply an updated fork from [mjohnson8165/pma8165-theme](https://github.com/mjohnson8165/pma8165-theme) but instead of using `pma8165-theme` as a base, the _official_ `pmahomme` is used as the base. The design and look and feel of `pma8165-theme` was then applied to it.

Among other things, this versions completes the original work by fixing several issues and providing a full dark theme for the database relation view.

## Installation

* Go to your themes directory:
`cd /usr/share/phpmyadmin/themes`

* Clone the repository: `sudo git clone https://git@github.com/madmath03/pmadarktheme.git pma8165`

* Go to your phpMyAdmin page and select the *pma8165* theme

## Screenshots

And here are a couple of screenshots of what you'll be getting:

![alt text](https://github.com/madmath03/pmadarktheme/blob/master/screenshot-1.png "PMA Dark Theme - Screenshot #1")

![alt text](https://github.com/madmath03/pmadarktheme/blob/master/screenshot-2.png "PMA Dark - Screenshot #2")

## Disclaimer

I made this theme for myself and I'm afraid that even at this point, it already satisfies my needs. Therefore, it may contain visual glitches here and there and without any help, I will only fix those when I come across them *and even then* I might not be so easily willing to, I do have a life you know... 

I've originally designed the theme for v4.0.10deb1, then moved on to v4.2.8.1 which eventually got merged back into the master branch. While I also kept the 4.0.X.X branch, the new version has many improvements over it and is *almost* backwards-compatible with older versions. 

But then again, only time will tell whether I'll work on the other branch anytime too soon, or rather just upgrade phpMyAdmin on all my other machines that are using it.

## Caution

The *img* directory is a mess - most icons in there are not even used and the sprites file was tampered manually, so attempting to run the *generate-sprites* script is entirely unadvisable at the moment, unless you really know what you're doing - I know what I'm doing, I just don't wanna do it *yet*...
